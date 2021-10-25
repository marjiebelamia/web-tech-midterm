<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaceBookUserRequest;
use App\Http\Requests\UpdateFaceBookUserRequest;
use App\Repositories\FaceBookUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class FaceBookUserController extends AppBaseController
{
    /** @var  FaceBookUserRepository */
    private $faceBookUserRepository;

    public function __construct(FaceBookUserRepository $faceBookUserRepo)
    {
        $this->faceBookUserRepository = $faceBookUserRepo;
    }

    /**
     * Display a listing of the FaceBookUser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $faceBookUsers = $this->faceBookUserRepository->all();

        return view('face_book_users.index')
            ->with('faceBookUsers', $faceBookUsers);
    }

    /**
     * Show the form for creating a new FaceBookUser.
     *
     * @return Response
     */
    public function create()
    {
        return view('face_book_users.create');
    }

    /**
     * Store a newly created FaceBookUser in storage.
     *
     * @param CreateFaceBookUserRequest $request
     *
     * @return Response
     */
    public function store(CreateFaceBookUserRequest $request)
    {
        $input = $request->all();

        $faceBookUser = $this->faceBookUserRepository->create($input);

        Flash::success('Face Book User saved successfully.');

        return redirect(route('faceBookUsers.index'));
    }

    /**
     * Display the specified FaceBookUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faceBookUser = $this->faceBookUserRepository->find($id);

        if (empty($faceBookUser)) {
            Flash::error('Face Book User not found');

            return redirect(route('faceBookUsers.index'));
        }

        return view('face_book_users.show')->with('faceBookUser', $faceBookUser);
    }

    /**
     * Show the form for editing the specified FaceBookUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faceBookUser = $this->faceBookUserRepository->find($id);

        if (empty($faceBookUser)) {
            Flash::error('Face Book User not found');

            return redirect(route('faceBookUsers.index'));
        }

        return view('face_book_users.edit')->with('faceBookUser', $faceBookUser);
    }

    /**
     * Update the specified FaceBookUser in storage.
     *
     * @param int $id
     * @param UpdateFaceBookUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFaceBookUserRequest $request)
    {
        $faceBookUser = $this->faceBookUserRepository->find($id);

        if (empty($faceBookUser)) {
            Flash::error('Face Book User not found');

            return redirect(route('faceBookUsers.index'));
        }

        $faceBookUser = $this->faceBookUserRepository->update($request->all(), $id);

        Flash::success('Face Book User updated successfully.');

        return redirect(route('faceBookUsers.index'));
    }

    /**
     * Remove the specified FaceBookUser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faceBookUser = $this->faceBookUserRepository->find($id);

        if (empty($faceBookUser)) {
            Flash::error('Face Book User not found');

            return redirect(route('faceBookUsers.index'));
        }

        $this->faceBookUserRepository->delete($id);

        Flash::success('Face Book User deleted successfully.');

        return redirect(route('faceBookUsers.index'));
    }
}
