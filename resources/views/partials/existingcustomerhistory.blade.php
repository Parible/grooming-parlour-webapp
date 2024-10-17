
<!-- Table responsive wrapper -->
<div class=" p-6 overflow-x-auto bg-white dark:bg-neutral-700 h-[150px] overflow-y-scroll">

  <!-- Table -->
  <table class="border border-gray-100 min-w-full text-left text-sm whitespace-nowrap">

    <!-- Table head -->
    <thead class="uppercase tracking-wider sticky top-0 bg-white dark:bg-neutral-700 border border-gray-400 dark:outline-neutral-600">
  
      <tr>
        
        <th scope="col" class="px-6 py-4">
         Service
        </th>
        <th scope="col" class="px-6 py-4">
         Amount
        </th>
        <th scope="col" class="px-6 py-4">
         Assigned
        </th>
        <th scope="col" class="px-6 py-4">
         Secretary
        </th>
        <th scope="col" class="px-6 py-4">
          Date
        </th>
      </tr>
    </thead>

    <!-- Table body -->
    <tbody>

    @unless($history->isEmpty())
    @foreach ($history as $transaction)
      <tr class="border-b dark:border-neutral-600">
        <!-- <th scope="row" class="px-6 py-4">
        
        </th> -->
        <td class="px-6 py-4">{{ $transaction->services }}</td>
        <td class="px-6 py-4">{{ $transaction->service_amt }}</td>
        <td class="px-6 py-4">{{ $transaction->staff_name }}</td>
        <td class="px-6 py-4">{{ $transaction->author }}</td>
        <td class="px-3 py-3">


<p><i class="fa-solid fa-calendar-days"></i>
{{  $transaction->created_at->format('M d, Y') }}
    <i class="fa-regular fa-clock"></i>  {{  $transaction->created_at->format('g:i a') }}
    </p>
    </td>
      
      </tr>
      @endforeach

@else
 <tr>
     <td colspan="5">No History found</td>
 </tr>
 @endunless


    </tbody>

  </table>

</div>






