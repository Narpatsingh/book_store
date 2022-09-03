<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::with('author')->paginate(10);
        return view('books.index', ['books' => $data]);
    }

        /**
     * Create User 
     * @param Nill
     * @return Array $user
     * @author Shani Singh
     */
    public function create()
    {
        $authors = Author::select(['id', DB::raw("CONCAT(first_name,' ', middle_name,' ',last_name) AS name")])->get();
        $author_list = [];
        if(!empty($authors)){
            foreach ($authors as $key => $author) {
                $author_list[$author->id] = $author->name;
            }
        }
        return view('books.add',['authors'=>$author_list]);
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
            'title' => 'string|required',
            'description' => 'string|required',
            'total_pages' => 'integer|required',
            'isbn' => 'string|required',
            'published_date' => 'string|required',
            'image_url' => 'string|required',
            'author_id' => 'integer|required',
        ]);

        DB::beginTransaction();
        try {

            // Store Data
            $user = Book::create($request->all());

            // Commit And Redirected To Listing
            DB::commit();
            return redirect()->route('books.index')->with('success','Book Created Successfully.');

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
    public function edit(book $book_id)
    {
        $authors = Author::select(['id', DB::raw("CONCAT(first_name,' ', middle_name,' ',last_name) AS name")])->get();
        $author_list = [];
        if(!empty($authors)){
            foreach ($authors as $key => $author) {
                $author_list[$author->id] = $author->name;
            }
        }
        return view('books.edit')->with([
            'book'  => $book_id,
            'authors'=>$author_list
        ]);
    }

    /**
     * Update User
     * @param Request $request, User $user
     * @return View Users
     * @author Shani Singh
     */
    public function update(Request $request, book $book_id)
    {
        // Validations
        $request->validate([
            'title' => 'string|required',
            'description' => 'string|required',
            'total_pages' => 'integer|required',
            'isbn' => 'string|required',
            'published_date' => 'string|required',
            'image_url' => 'string|required',
            'author_id' => 'integer|required',
        ]);

        DB::beginTransaction();
        try {

            // Store Data
            $auther_updated = book::whereId($book_id->id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'total_pages' => $request->total_pages,
                'isbn' => $request->isbn,
                'published_date' => $request->published_date,
                'image_url' => $request->image_url,
                'author_id' => $request->author_id,
            ]);

            // Commit And Redirected To Listing
            DB::commit();
            return redirect()->route('books.index')->with('success','Book Updated Successfully.');

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
            book::whereId($author_id->id)->delete();

            DB::commit();
            return redirect()->route('books.index')->with('success', 'book Deleted Successfully!.');

        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
