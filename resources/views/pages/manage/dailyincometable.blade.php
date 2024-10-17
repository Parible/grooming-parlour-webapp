<x-layout>

<div class="ml-2">
    <p class="font-semibold text-neutral-500 text-lg">End Of Day</p>
</div>

<div class="overflow-x-auto p-2">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                         
                            <th scope="col" class="px-4 py-3">Amount</th>
                            <th scope="col" class="px-4 py-3">Date</th>
                      
                           
                            <th scope="col" class="px-4 py-3">
                            <th scope="col" class="px-4 py-3">
                            </th>
                        </tr>
                    </thead>
            
                    <tbody>
                   
                    @forelse ( $dailyIncomeRecords as $income)
                        <tr class="border-b dark:border-gray-700">
                             <td class="px-4 py-3">{{ $income->amount}}</td>
                            <td class="px-4 py-3">{{ $income->date->format('M d, Y g:i a') }}</td>
                            
                          
                           @empty
    <tr>
        <td colspan="2">No Daily Income records found</td>
    </tr>
@endforelse

                            
                          
                       
                      
                    </tbody>
                   
                </table>
            </div>
            </x-layout>