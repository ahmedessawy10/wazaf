@extends('layouts.users-app')

@section('content')
    <div class="container mt-4">
         <div class="d-flex justify-content-between align-items-center mb-3">
             <h2>Bookmarks (5)</h2>
             <div class="dropdown">
                  <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      Filter: All
                   </button>
                  <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                     <li><a class="dropdown-item" href="#">All</a></li>
                     <li><a class="dropdown-item" href="#">Category 1</a></li>
                     <li><a class="dropdown-item" href="#">Category 2</a></li>
                   </ul>
                </div>
         </div>
        <div class="candidate-list" id="candidateListContainer">
             <x-candidate-card image="https://i.ibb.co/7zF0301/Rectangle-347.png" name="Rakibul Islam" job="Electrician" id="1"/>
            <x-candidate-card image="https://i.ibb.co/98k7B3C/Rectangle-348.png" name="Lotika Rana" job="Tailor" id="2"/>
             <x-candidate-card image="https://i.ibb.co/PzL6k4p/Rectangle-349.png" name="Manus Islam" job="Journalist" id="3"/>
              <x-candidate-card image="https://i.ibb.co/0X0c4Qv/Rectangle-350.png" name="Atif Hossain" job="Journalist" id="4"/>
               <x-candidate-card image="https://i.ibb.co/1sT4v0m/Rectangle-351.png" name="Mehedi Hasan" job="Farmer" id="5"/>
        </div>
    </div>
@endsection