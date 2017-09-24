      <div class="row" id="lightbox-container">
        <div class="col-md-8" id="lightbox-wrapper">
          <div class="project-header">
            <button class="btn btn-default" onclick="$('#lightbox-container').fadeOut();">X</button>
            <h3>
             {{ $projects['title'] }}
            </h3>
            <p>
              {{ $projects['body'] }}
            </p>
            
          </div>
            
            @if($projects['test_id'] == 0)
              <form method="post" action="/create/proposals">
                {{ csrf_field() }}
                @include('includes.formerror')
                <input type="hidden" name="project_id" value="{{ $projects['id'] }}" />
                <input type="hidden" id="answer_id" name="answer_id" />
                <div class="project-body">
                  
                  <div class="form-group">
                   <label for="body">Proposal</label>
                   <textarea name="body" class="form-control" required></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="rate">{{ ucfirst($projects['payment_period']) }} Rate</label>
                    <input name="rate" class="form-control" type="number" required/>
                  </div>
                  
                  <div class="form-group">
                    <label for="resume">Resume</label>
                    <input name="resume" type="file" class='form-control'>
                  </div>
                  
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" />
                  </div>
                  
              </form>
            @else
            
              <button class="btn btn-primary">Take Test</button>
            
            @endif
            
          </div>
          
        </div>
        <div id="lightbox-overlay"></div>
      </div>