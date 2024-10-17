<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    
    //Staff Table
    public function view_staff()
    {
    
        $staff = Staff::all();
        return view('pages.staff.staff',['staff' => $staff]);

    }



    public function create_staff()
    {
        $staff = Staff::all();
        
        return view('pages.staff.newstaff',['staff' => $staff]);
    }




    public function store_staff(Request $request)
    {
        $formFields = $request->validate([
            'staff_name' => 'required|string|min:3|max:50',
            'contact' => 'required|numeric|min:10',
            'location' => 'required|string|max:50',
            'image' => 'image', // Ensure it's an image if provided
        ]);
    
        // Check if an image was uploaded
        if ($request->hasFile('image')) {
            // Upload the image to the 'uploads' directory
            $imagePath = $request->file('image')->store('staff_profiles', 'public');
    
            // Store the image path in the form fields
            $formFields['image'] = $imagePath;
        } else {
            // If no image was uploaded, provide a default image path
            $formFields['image'] = '/images/svgs/user-circle-svgrepo-com.svg'; // Change 'default_image.jpg' to your default image path
        }

        
        
    
        // Store the form fields in the session
        $request->session()->put('page_data', $formFields);
    
        // Get the merged form fields from the session
        $pageData = $request->session()->get('page_data');
    
        // Create a new staff record with the form fields
        Staff::create($pageData);
    
        return redirect('/staff')->with('message', 'Staff added successfully');
    }
    
    


    // public function show_staff()
    // {
    //     $staff = Staff::all();
    //     return view('pages.staff.editstaff',['staff' => $staff]);
    // }



    public function show_edit_staff($id)
    {
        $staff = Staff::findOrFail($id);
        return view('pages.staff.editstaff',['staff' => $staff]);
    }

    public function edit_staff(Request $request, $id)
    {
        $formFields = $request->validate([
            'staff_name' => 'required|string|min:3|max:50',
            'contact' => 'required|numeric|min:10',
            'location' => 'required|string|max:50',
            'image' => 'nullable|image', // Ensure it's an image if provided
        ]);
    
        
        $editstaff= Staff::findOrFail($id);
        $editstaff->update( $formFields);
        
        return redirect('/staff')->with('message', 'staff updated successfully');
    }
}
