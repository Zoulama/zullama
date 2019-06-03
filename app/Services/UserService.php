<?php

namespace Zullama\Services;

use Zullama\Zullama\Datatables\UserDatatable;
use Zullama\Zullama\Repositories\UserRepository;

/**
 * Class UserService.
 */
class UserService extends BaseService
{
    /**
     * @var UserRepository
     */
    protected $userRepo;

    /**
     * @var DatatableService
     */
    protected $datatableService;

    /**
     * UserService constructor.
     *
     * @param UserRepository   $userRepo
     * @param DatatableService $datatableService
     */
    public function __construct(UserRepository $userRepo, DatatableService $datatableService)
    {
        $this->userRepo = $userRepo;
        $this->datatableService = $datatableService;
    }

    /**
     * @return UserRepository
     */
    protected function getRepo()
    {
        return $this->userRepo;
    }

    /**
     * @param $accountId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDatatable()
    {
        $datatable = new UserDatatable(false);
        $query = $this->userRepo->find();
//dd($query->get());
        return $this->datatableService->createDatatable($datatable, $query);
    }
}
