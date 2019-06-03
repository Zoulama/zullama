<?php

namespace Zullama\Http\Controllers;

use Zullama\Models\User;

use Zullama\Zullama\Datatables\UserDatatable;
use Zullama\Zullama\Repositories\UserRepository;
use Zullama\Services\UserService;
use Auth;
use Input;
use Redirect;
use Session;
use URL;
use Utils;
use View;

/**
 * Class ProductController.
 */
class UserController extends BaseController
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * @var UserRepository
     */
    protected $userRepo;

    /**
     * ProductController constructor.
     *
     * @param ProductService $productService
     */
    public function __construct(UserService $userService,UserRepository $userRepo)
    {
        //parent::__construct();
//dd('dd');
        $this->userService = $userService;
        $this->userRepo = $userRepo;
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        $datatable = new UserDatatable();
        //dd($datatable->bulkActions());

        return View::make('teste', [
            'entityType' => 'user',
            'datatable' => new UserDatatable(),
            'title' => trans('texts.users'),
        ]);
    }

    public function getDatatable()
    {//dd($this->userRepo);
        return $this->userService->getDatatable();
    }
}
