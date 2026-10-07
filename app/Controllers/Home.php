<?php

namespace App\Controllers;

use App\Models\CustomerAccountModel;

class Home extends BaseController
{
    protected $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerAccountModel();
    }

    // Public website homepage
    public function index(): string
    {
        return view('home', [
            'title' => 'Puihaha Electric - Reliable Energy Solutions',
            'page'  => 'home',
        ]);
    }

    // Dashboard / Read
    public function dashboard()
    {
        if (! session()->get('isLoggedIn')) {
            return redirect()->to('/login')
                ->with('error', 'Please log in first.');
        }
        $keyword = $this->request->getGet('search');
        $status  = $this->request->getGet('status');
        $type    = $this->request->getGet('type');

        $perPage = 5;

        if ($keyword) {
            $accounts = $this->customerModel->searchAccounts($keyword, $perPage);
        } elseif ($status) {
            $accounts = $this->customerModel->getAccountsByStatus($status, $perPage);
        } elseif ($type) {
            $accounts = $this->customerModel->getAccountsByType($type, $perPage);
        } else {
            $accounts = $this->customerModel->getAccountsPaginated($perPage);
        }

        return view('home/index', [
            'accounts'           => $accounts,
            'pager'              => $this->customerModel->pager,
            'total_accounts'     => $this->customerModel->getTotalAccounts(),
            'active_accounts'    => $this->customerModel->getCountByStatus('active'),
            'inactive_accounts'  => $this->customerModel->getCountByStatus('inactive'),
            'suspended_accounts' => $this->customerModel->getCountByStatus('suspended'),
            'current_page'       => $this->request->getGet('page') ?? 1,
            'search_keyword'     => $keyword,
            'filter_status'      => $status,
            'filter_type'        => $type,
        ]);
    }

    // Read one account
    public function viewAccount($id)
    {
        $account = $this->customerModel->find($id);

        if (! $account) {
            return redirect()->to('/dashboard')
                ->with('error', 'Account not found.');
        }

        return view('home/view_account', [
            'account' => $account,
        ]);
    }

    // Show Create form
    public function createAccount()
    {
        return view('home/account_form', [
            'title'   => 'Add Customer',
            'account' => null,
            'action'  => base_url('account/store'),
        ]);
    }

    // Create / Store
    public function storeAccount()
    {
        $rules = [
            'account_number'  => 'required|is_unique[customer_accounts.account_number]',
            'customer_name'   => 'required|min_length[2]',
            'address'         => 'required',
            'phone'           => 'required',
            'email'           => 'required|valid_email',
            'meter_number'    => 'required|is_unique[customer_accounts.meter_number]',
            'connection_type' => 'required|in_list[residential,commercial,industrial]',
            'status'          => 'required|in_list[active,inactive,suspended]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->customerModel->insert($this->request->getPost([
            'account_number',
            'customer_name',
            'address',
            'phone',
            'email',
            'meter_number',
            'connection_type',
            'status',
        ]));

        return redirect()->to('/dashboard')
            ->with('success', 'Customer account added successfully.');
    }

    // Show Edit form
    public function editAccount($id)
    {
        $account = $this->customerModel->find($id);

        if (! $account) {
            return redirect()->to('/dashboard')
                ->with('error', 'Account not found.');
        }

        return view('home/account_form', [
            'title'   => 'Edit Customer',
            'account' => $account,
            'action'  => base_url('account/update/' . $id),
        ]);
    }

    // Update
    public function updateAccount($id)
    {
        $account = $this->customerModel->find($id);

        if (! $account) {
            return redirect()->to('/dashboard')
                ->with('error', 'Account not found.');
        }

        $rules = [
            'account_number'  => "required|is_unique[customer_accounts.account_number,id,{$id}]",
            'customer_name'   => 'required|min_length[2]',
            'address'         => 'required',
            'phone'           => 'required',
            'email'           => 'required|valid_email',
            'meter_number'    => "required|is_unique[customer_accounts.meter_number,id,{$id}]",
            'connection_type' => 'required|in_list[residential,commercial,industrial]',
            'status'          => 'required|in_list[active,inactive,suspended]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->customerModel->update($id, $this->request->getPost([
            'account_number',
            'customer_name',
            'address',
            'phone',
            'email',
            'meter_number',
            'connection_type',
            'status',
        ]));

        return redirect()->to('/dashboard')
            ->with('success', 'Customer account updated successfully.');
    }

    // Delete
    public function deleteAccount($id)
    {
        $account = $this->customerModel->find($id);

        if (! $account) {
            return redirect()->to('/dashboard')
                ->with('error', 'Account not found.');
        }

        $this->customerModel->delete($id);

        return redirect()->to('/dashboard')
            ->with('success', 'Customer account deleted successfully.');
    }
}