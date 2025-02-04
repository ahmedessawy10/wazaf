<!-- @extends('layouts.users-app')

@section('content')
    <div class="container mt-4">
         <div class="d-flex justify-content-between align-items-center mb-3">
               <h2>Custom Questions</h2>
               <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="enableCustomQuestions" onchange="toggleCreateQuestions()">
                   <label class="form-check-label" for="enableCustomQuestions">Create Custom Questions (Disable)</label>
                </div>
            </div>
          <div id="createQuestionContainer" style="display: none;">
             <div class="create-question-container">
                     <label class="form-label">Create Question</label>
                     <input type="text" class="form-control mb-2" placeholder="Question.."  id="addQuestionInput">
                    <div class="d-flex align-items-center justify-content-between">
                          <label class="form-label">Required ( Candidate must answer )</label>
                            <button type="button" class="btn btn-primary btn-sm" onclick="createQuestion()">Save Question</button>
                       </div>
            </div>
           <div class="existing-questions-container">
                  <h5>Existing Questions (1)</h5>
                    <table class="table table-borderless">
                       <thead>
                          <tr>
                                <th>Title</th>
                                <th>Required</th>
                                 <th>Action</th>
                            </tr>
                         </thead>
                         <tbody id="questionListContainer">
                             </tbody>
                       </table>
                   </div>
             </div>
              <div id="emptyStateContainer">
                     <div class="empty-state-container">
                              <img src="https://i.ibb.co/9vvQ5yK/Clip.png" alt="empty-state">
                          <p class="text-muted">No Data Found!</p>
                         </div>
                </div>
     </div>
@endsection
@section('script')
    <script>
        function toggleCreateQuestions() {
           const createQuestionContainer = document.getElementById('createQuestionContainer');
           const emptyStateContainer = document.getElementById('emptyStateContainer');
           const enableCustomQuestions = document.getElementById('enableCustomQuestions');
             const label = document.querySelector('[for="enableCustomQuestions"]');
           if (enableCustomQuestions.checked) {
               createQuestionContainer.style.display = 'block';
                 emptyStateContainer.style.display = 'none';
                label.textContent = 'Create Custom Questions (Enable)';
           }
              else {
           createQuestionContainer.style.display = 'none';
              emptyStateContainer.style.display = 'block';
               label.textContent = 'Create Custom Questions (Disable)';
           }
       }
     function createQuestion(){
        const question = document.getElementById('addQuestionInput').value;
        fetch('{{route('employer.custom-questions')}}', {
                method: 'POST',
                 headers: {
                       'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
               body: JSON.stringify({
                    'title': question,
                   }),
              })
              .then(response => {
                if (!response.ok) {
                   return response.json().then(errorData => {
                        throw new Error('Request failed');
                    });
                   }
                   return response.json();
               })
            .then(data => {
               console.log(data);
                    alert('Question Created Successfully')
                 fetchQuestions();
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
                alert("Question Created Failed Please check Your Data");
            });
        }
        function fetchQuestions(){
            fetch('{{route('employer.custom-questions')}}', {
            method: 'GET',
            headers: {
                   'Content-Type': 'application/json',
                   'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
         })
           .then(response => {
            if (!response.ok) {
               return response.json().then(errorData => {
                  console.log(errorData)
                  throw new Error('Request failed');
                  });
                   }
                   return response.json();
               })
            .then(data => {
                 console.log(data);
                  const questions = data.data;
                const questionListContainer = document.getElementById('questionListContainer');
                 questionListContainer.innerHTML = ""
                    questions.forEach(question =>{
                         questionListContainer.innerHTML += `
                              <tr>
                                  <td>${question.title}</td>
                                  <td>
                                       <i class="fas fa-check-circle text-success"></i>
                                  </td>
                                   <td>
                                       <button class="btn btn-light btn-sm border-0"><i class="fas fa-edit text-primary"></i></button>
                                      <button class="btn btn-light btn-sm border-0"><i class="fas fa-trash text-danger"></i></button>
                                   </td>
                               </tr>
                        `
                })
            })
          .catch(error => {
             console.error('There was a problem with the fetch operation:', error);
          });
        }
      fetchQuestions();
    </script>
@endsection -->