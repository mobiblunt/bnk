@extends('header')

@section('title', 'Transactions')

@section('content')
<h3>All Transactions</h3>
<div class="is-scrollbar-hidden min-w-full overflow-x-auto">
    <table class="w-full text-left">
      <thead>
        <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500">
          <th
            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
          >
            Date
          </th>
          <th
            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
          >
            Category
          </th>
          <th
            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
          >
            Reference
          </th>
          <th
            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
          >
            Narration
          </th>
          <th
            class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
          >
            Amount
          </th>
          
        </tr>
      </thead>
      <tbody>
      @foreach($tran as $alt)
        <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500">
          <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{$alt->created_at}}</td>
          <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{$alt->category}}</td>
          <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            {{$alt->ref}}
          </td>
          <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{$alt->narration}}</td>
          <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{$alt->amount}}</td>
          
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>


@stop