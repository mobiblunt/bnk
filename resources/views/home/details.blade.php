@extends('header')

@section('title', 'Domestic Transfer')

@section('content')

<div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            Citi Transfers
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="#"
                >Transfers</a
              >
              <svg
                x-ignore
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </li>
            <li>Review Details</li>
          </ul>
        </div>
        <div class="progress h-2 bg-slate-150 dark:bg-navy-500">
    <div
      class="is-active relative w-4/12 overflow-hidden rounded-full bg-slate-500 dark:bg-navy-400"
    ></div>
  </div>
        <template x-if="$store.breakpoints.isXs">
          <div
            x-data="{isStuck:false}"
            class="pb-6"
            x-intersect:enter.full.margin.-60px.0.0.0="isStuck = false"
            x-intersect:leave.full.margin.-60px.0.0.0="isStuck = true"
          >
            <div :class="isStuck && 'fixed right-0 top-[60px] w-full z-10'">
              <div
                class="transition-all duration-200"
                :class="isStuck && 'py-2.5 px-4 bg-white dark:bg-navy-700 shadow-lg relative'"
              >
                <ol class="steps with-space-line">
                <li class="step before:bg-primary dark:before:bg-accent">
                    <div
                      class="step-header rounded-full bg-primary text-white dark:bg-accent"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </div>
                    <h3
                      class="text-xs font-medium text-slate-700 dark:text-navy-100"
                    >
                      Transfer Details
                    </h3>
                  </li>
                   <li class="step before:bg-slate-200 dark:before:bg-navy-500">
                    <div
                      class="step-header rounded-full bg-primary text-white dark:bg-accent"
                    >
                      2
                    </div>
                    <h3
                      class="text-xs font-medium text-slate-700 dark:text-navy-100"
                    >
                      Review Details
                    </h3>
                  </li>
                  
                  <li class="step before:bg-slate-200 dark:before:bg-navy-500">
                    <div
                      class="step-header rounded-full bg-slate-200 text-slate-800 dark:bg-navy-500 dark:text-white"
                    >
                      3
                    </div>
                    <h3
                      class="text-xs font-medium text-slate-700 dark:text-navy-100"
                    >
                      Enter Authorisation Code
                    </h3>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </template>

        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
          <div class="col-span-12 sm:col-span-8">
            <div class="card p-4 sm:p-5">
              <p
                class="text-base font-medium text-slate-700 dark:text-navy-100"
              >
                Transfer Details
              </p>
              <p ><span class="text-success"> Category:  </span> {{ $depo->type}}</p>
            <p ><span class="text-success"> Beneficiary Name:  </span> {{ $depo->beneficiary}}</p>
            <p class="category"><span class="text-success"> Bank Name:  </span> {{ $depo->bank_name }}</p>
            <p class="category"><span class="text-success"> Account No:   </span> {{ $depo->account}} </p>
            <p class="category"><span class="text-success"> Routing:  </span> {{ $depo->routing}} </p>
            <p class="category"><span class="text-success"> Swift:  </span> {{ $depo->swift }} </p>
            <p class="category"><span class="text-success"> Amount:  </span> ${{ $depo->amount}} </p>
            <p class="category"><span class="text-success"> Narration:  </span> {{ $depo->narration }} </p>
            </div>
            <form accept-charset="UTF-8" role="form" method="post" action="{{ route('post.pin') }}">
              
              <input name="_token" value="{{ csrf_token() }}" type="hidden">
               <input name="dep_id" value="{{ $depo->id }}" type="hidden">
               <br><br>
            <div class="flex justify-end space-x-2">
                 
                  <button type="submit" 
                    class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                  >
                    <span>Submit</span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </button>

                </div>
            </form>
          </div>
          <div class="mt-4 space-y-4">
            
            </div>
          <div class="hidden sm:col-span-4 sm:block">
            <div class="sticky top-24 mt-3">
              <ol class="steps with-space-line">
                  <li class="step pb-8 before:bg-primary dark:before:bg-accent">
                  <div
                    class="step-header rounded-full bg-primary text-white dark:bg-accent"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>
                  <h3 class="ml-4 text-slate-700 dark:text-navy-100">
                    Enter Transfer Details
                  </h3>
                </li>
                    <li
                  class="step pb-8 before:bg-slate-200 dark:before:bg-navy-500"
                >
                  <div
                    class="step-header rounded-full bg-primary text-white dark:bg-accent"
                  >
                    2
                  </div>
                  <h3 class="ml-4 text-slate-700 dark:text-navy-100">
                    Review Details
                  </h3>
                </li>
                  
                  <li class="step before:bg-slate-200 dark:before:bg-navy-500">
                    <div
                      class="step-header rounded-full bg-slate-200 text-slate-800 dark:bg-navy-500 dark:text-white"
                    >
                      3
                    </div>
                    <h3
                      class="text-xs font-medium text-slate-700 dark:text-navy-100"
                    >
                      Enter Authorisation Code
                    </h3>
                  </li>
                  
                </ol>
            </div>
          </div>
        </div>

  

@stop