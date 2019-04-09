@php
   if(isset($tweet->can_delete)){}
@endphp
      <div>
           <form name="deleteform" method="POST" action="">
               @csrf
               <input type="hidden" name="_method" value="destroy" />
               <input type="hidden" name="tweet_id" value="" />
               <button class="btn btn-sm delete-btn">Remove</button>
           </form>
       </div>
