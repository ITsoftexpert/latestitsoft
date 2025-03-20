<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QueryForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\QueryFormMail;
use Illuminate\Support\Facades\Session;

class QueryFormController extends Controller
{


    /**
     * Display a listing of the QueryForms.
     */
    public function index()
    {
        $QueryForms = QueryForm::all(); // Sabhi queries fetch karo
        return view('admin.client-query', compact('QueryForms')); // View ko data pass karo
    }

    /**
     * Store a newly created QueryForm in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'company_name' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'web_url' => 'nullable|url',
            'your_msg' => 'nullable|string',
            'preffered_option' => 'nullable|string',
            'budget' => 'nullable|string',
            'goals' => 'nullable|string',
            'fb_link' => 'nullable|url',
            'insta_link' => 'nullable|url',
            'category' => 'nullable|string',
            'requirement' => 'nullable|string',
            'existing_tool' => 'nullable|string',
            'language' => 'nullable|string',
            'form_type' => 'nullable|string',
        ]);


        $queryData = $request->all();
        QueryForm::create($queryData);

        // ✅ Call function to send emails
        $this->sendQueryEmail($request);

        return redirect('/thank-you');
    }

    /**
     * Display the specified QueryForm.
     */
    public function show($id)
    {
        $QueryForm = QueryForm::findOrFail($id);
        return response()->json($QueryForm);
    }

    /**
     * Update the specified QueryForm in storage.
     */
    public function update(Request $request, $id)
    {
        $QueryForm = QueryForm::findOrFail($id);

        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:query_form,email,' . $id,
            'company_name' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'web_url' => 'nullable|url',
            'your_msg' => 'nullable|string',
            'preffered_option' => 'nullable|string',
            'budget' => 'nullable|string',
            'goals' => 'nullable|string',
            'fb_link' => 'nullable|url',
            'insta_link' => 'nullable|url',
            'category' => 'nullable|string',
            'requirement' => 'nullable|string',
            'existing_tool' => 'nullable|string',
        ]);

        $QueryForm->update($request->all());

        return response()->json(['message' => 'Query updated successfully', 'QueryForm' => $QueryForm]);
    }

    /**
     * Remove the specified QueryForm from storage.
     */
    public function destroy($id)
    {
        $QueryForm = QueryForm::findOrFail($id);
        $QueryForm->delete();

        return response()->json(['message' => 'Query deleted successfully']);
    }


    public function markQuery(Request $request)
    {
        $query = QueryForm::find($request->id);
        if ($query) {
            $query->is_marked = $request->status;
            $query->save();
            return response()->json(['message' => 'Query Marked Successfully!']);
        }
        return response()->json(['message' => 'Query Not Found!'], 404);
    }

    // ✅ Submit Remarks (Auto Save on Blur)
    public function submitRemarks(Request $request)
    {
        $query = QueryForm::find($request->id);
        if ($query) {
            $query->remarks = $request->remarks;
            $query->save();
            return response()->json(['message' => 'Remarks Updated Successfully!']);
        }
        return response()->json(['message' => 'Query Not Found!'], 404);
    }

    public function sendQueryEmail(Request $request)
    {
        $queryData = $request->all();


        $userEmail = $queryData['email'];
        Mail::send([], [], function ($message) use ($userEmail, $queryData) {
            $message->to($userEmail)
                ->subject("Thank you for contacting us!")
                ->html(view('emails.user_email', ['queryData' => $queryData])->render());
        });

        $adminEmail = "kumshubham25@gmail.com";
        Mail::send([], [], function ($message) use ($adminEmail, $queryData) {
            $message->to($adminEmail)
                ->subject("New Query Received")
                ->html(view('emails.admin_email', ['queryData' => $queryData])->render());
        });
    }


    // login

    public function accessAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        if ($username == "adminlogin" && $password == "access") {
            // ✅ Session Start Karein
            Session::put('admin_username', $username);
            return redirect('/admin/dashboard');
        } else {
            return back()->withErrors(['error' => 'Invalid Username or Password']);
        }
    }

    // ✅ Admin Logout Function
    public function logoutAdmin()
    {
        Session::forget('admin_username');
        return redirect('/admin/login')->withErrors(['error' => 'You have been logged out!']);
    }
}