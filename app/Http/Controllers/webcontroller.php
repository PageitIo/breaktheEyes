<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted; //
use Statamic\Facades\Entry;
use Statamic\Facades\Collection;

use Statamic\View\View;

class webcontroller extends Controller

{

    public function index()
    {
        $entry = Entry::find('home'); // Repl

        return (new View)
        ->template('pages.HomePage')
        //->layout('default')
        ->with([
            'title' => $entry->get('title'),
            'project_image_1' => $entry->get('project_image_1'),
            'project_1_title' => $entry->get('project_1_title'),
            'project_1_link' => $entry->get('project_1_link'),
            'project_1_description' => $entry->get('project_2_description'),
            'project_image_2' => $entry->get('project_image_2'),
            'project_2_title' => $entry->get('project_2_title'),
            'project_2_link' => $entry->get('project_2_link'),
            'project_2_description' => $entry->get('project_2_description'),
            'project_3_image' => $entry->get('project_3_image'),
            'project_3_title' => $entry->get('project_3_title'),
            'project_3_link' => $entry->get('project_3_link'),
            'project_3_description' => $entry->get('project_3_description')

        ]);
    }
    
    public function liveRecording()
    {
        return view('pages.liverecording');
    }

    public function theTribe()
    {
        return view('pages.aboutUs');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function p_photography()
    {
        $entry = Entry::query()
        ->where('slug', 'portrait-photography')
        ->first(); // Find the entry with the given slug
    
    return (new View)
        ->template('pages.pPhotography')
        ->layout('default')
        ->with([
            'title' => $entry->get('title'),
            'sliders' => $entry->get('sliders'),
        ]);
    }


    public function fineArtandfashion()
    {
        $entry = Entry::query()
        ->where('slug', 'fine-art-and-fashion')
        ->first(); // Find the entry with the given slug
    
    return (new View)
        ->template('pages.FineArtandFashion')
        ->layout('default')
        ->with([
            'title' => $entry->get('title'),
            'sliders' => $entry->get('sliders'),
        ]);
    }

    public function musicVideo()
    {
       
        $entry = Entry::query()
        ->where('slug', 'music-video')
        ->first(); 
    
    return (new View)
        ->template('pages.pmusicVideo')
        ->layout('default')
        ->with([
            'title' => $entry->get('title'),
            'video_1' => $entry->get('video_1'),
            'video_2' => $entry->get('video_2'),
            'video_3' => $entry->get('video_3'),
            'video_4' => $entry->get('video_4')
        ]);
    }





    public function realEstate()
    {
        return view('pages.realEstate');
    }

    public function eventLifestyle()
    {
        return view('pages.eventLifestyle');
    }

    public function contactUs()
    {
        return view('pages.contactUs');
    }


    

    public function projects()
    {
        $collection = Collection::findByHandle('case_study');
        
        if (!$collection) {
            // Handle collection not found error
        }
    
        $entries = $collection->queryEntries()->get();
    
        return view('pages.caseStudy', ['entries' => $entries]);
    }
    


   

    public function show($slug)
    {
        $entry = Entry::query()
            ->where('collection', 'case_study')
            ->where('slug', $slug)
            ->first();
 
        return view('pages.caseStudyDetail', ['entry' => $entry]);
    }







    // controller for contact form
    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $emailData = [
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'message' => $validatedData['message'],
        ];

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactFormSubmitted($emailData));

        $request->session()->flash('success', 'Form submitted successfully!');

        return redirect()->back();
    }
}
