<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Author;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Author::paginate(10);

        return view('authors.index', ['authors' => $data]);
    }

        /**
     * Create User 
     * @param Nill
     * @return Array $user
     * @author Shani Singh
     */
    public function create()
    {
        return view('authors.add');
    }

    /**
     * Store User
     * @param Request $request
     * @return View Users
     * @author Shani Singh
     */
    public function store(Request $request)
    {
        // Validations
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'middle_name'   => 'required',
        ]);

        DB::beginTransaction();
        try {

            // Store Data
            $user = Author::create([
                'first_name'    => $request->first_name,
                'last_name'     => $request->last_name,
                'middle_name'         => $request->middle_name,
            ]);

            // Commit And Redirected To Listing
            DB::commit();
            return redirect()->route('authors.index')->with('success','Author Created Successfully.');

        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * Edit User
     * @param Integer $user
     * @return Collection $user
     * @author Shani Singh
     */
    public function edit(Author $author_id)
    {
        return view('authors.edit')->with([
            'author'  => $author_id
        ]);
    }

    /**
     * Update User
     * @param Request $request, User $user
     * @return View Users
     * @author Shani Singh
     */
    public function update(Request $request, Author $author_id)
    {
        // Validations
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'middle_name'   => 'required',
        ]);

        DB::beginTransaction();
        try {

            // Store Data
            $auther_updated = Author::whereId($author_id->id)->update([
                'first_name'    => $request->first_name,
                'last_name'     => $request->last_name,
                'middle_name'         => $request->middle_name,
            ]);

            // Commit And Redirected To Listing
            DB::commit();
            return redirect()->route('authors.index')->with('success','Author Updated Successfully.');

        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * Delete User
     * @param User $user
     * @return Index Users
     * @author Shani Singh
     */
    public function delete(Author $author_id)
    {
        DB::beginTransaction();
        try {
            // Delete User
            Author::whereId($author_id->id)->delete();

            DB::commit();
            return redirect()->route('authors.index')->with('success', 'Author Deleted Successfully!.');

        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function find()
    {
        $keyword = request()->input('keyword');
        $data = Authors::select(['id', DB::raw("CONCAT(first_name,' ', middle_name,' ',last_name) AS text")])->where('first_name', 'like', '%' . $keyword . '%')->orWhere('middle_name', 'like', '%' . $keyword . '%')->orWhere('last_name', 'like', '%' . $keyword . '%')->limit(5)->get();

        return response()->json([
            'message' => "Data Found",
            'data' => $data,
        ], 200);
    }
}
