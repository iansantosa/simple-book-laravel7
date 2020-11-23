<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BaseController as BaseController;
use App\book;
use Validator;
class bookController extends BaseController
{
    public function index()
    {
        $books = book::all();
        
		//echo "hallo";
		
		return $this->sendResponse($books->toArray(), 'Book retrieved successfully.');
    }
    public function store(Request $request)
    {
		
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'author'=> 'required',
            'isbn'=> 'required',
            'publisher'=> 'required',
            'publication_year'=> 'required',
            'last_modified_date'=> 'required',
            'created_date'
        ]);
        if($validator->fails())
        {
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $book = book::create($input);
        return $this->sendResponse($book->toArray(), 'Books created successfully.');
		
		// echo "hallo";
    }
    public function show($id)
    {
        $book = book::find($id);
        if (is_null($book)) {
            return $this->sendError('Book not found.');
        }
        return $this->sendResponse($book->toArray(), 'Book retrieved successfully.');
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'author'=> 'required',
            'isbn'=> 'required',
            'publisher'=> 'required',
            'publication_year'=> 'required',
            'last_modified_date'=> 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $book = book::find($id); 
        $book->title = $input['title'];
        $book->author = $input['author'];
        $book->isbn = $input['isbn'];
        $book->publisher = $input['publisher'];
        $book->publication_year = $input['publication_year'];
        $book->last_modified_date = $input['last_modified_date'];
        $book->save();
        return $this->sendResponse($book->toArray(), 'Book updated successfully.');
    }
    public function destroy($id)
    {
        $book = book::find($id); 
        $book->delete();
        return $this->sendResponse($book->toArray(), 'Book deleted successfully.');
    }
}