@extends('header')

@section('title', 'Domestic Transfer')

@section('content')

<div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2
            class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
          >
            International Transfer
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
            <li>International Transfer</li>
          </ul>
        </div>
        <div class="progress h-2 bg-slate-150 dark:bg-navy-500">
    <div
      class="is-active relative w-2/12 overflow-hidden rounded-full bg-slate-500 dark:bg-navy-400"
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
                 <li class="step before:bg-slate-200 dark:before:bg-navy-500">
                    <div
                      class="step-header rounded-full bg-primary text-white dark:bg-accent"
                    >
                      1
                    </div>
                    <h3
                      class="text-xs font-medium text-slate-700 dark:text-navy-100"
                    >
                      Enter Transfer Details
                    </h3>
                  </li>
                   <li class="step before:bg-slate-200 dark:before:bg-navy-500">
                    <div
                      class="step-header rounded-full bg-slate-200 text-slate-800 dark:bg-navy-500 dark:text-white"
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
              <div class="mt-4 space-y-4">
                <form accept-charset="UTF-8" role="form" method="post" action="{{ route('post.int') }}">
                <label class="block">
                  <span>Routing Number</span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Routing"
                      type="number" id="investment" name="routing" maxlength="10" required
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      
                    </span>
                  </span>
                </label>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <label class="block">
                    <span>Swift Code</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Swift Code"
                        type="text" name="swift"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        
                      </span>
                    </span>
                  </label>
                  <label class="block">
                    <span>Beneficiary Name</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Beneficiary Name"
                        type="text" name="bene"
                       
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        
                      </span>
                    </span>
                  </label>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
                  <label class="block sm:col-span-8">
                    <span>Amount</span>
                    <div class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Amount"
                        type="number" name="amount" required
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        
                      </span>
                    </div>
                  </label>
                  <label class="block sm:col-span-4">
                    <span>Beneficiary Account</span>
                    <div class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Account Number"
                        type="text" name="account_no"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        
                      </span>
                    </div>
                  </label>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
                  <label class="block sm:col-span-8">
                    <span>Bank Address</span>
                    <div class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Bank Address"
                        type="number" name="address" required
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        
                      </span>
                    </div>
                  </label>
                  <label class="block sm:col-span-4">
                    <span>Country</span>
                    <div class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="country"
                        type="text" name="country"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        
                      </span>
                    </div>
                  </label>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <label class="block">
                    <span>Beneficiary Bank</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Bank Name"
                        type="text" name="bank_name" required
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        
                      </span>
                    </span>
                  </label>
                  <label class="block">
                    <span>Narration</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Narration"
                        type="text" name="narration"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        
                      </span>
                    </span>
                  </label>
                </div>
                 <input name="_token" value="{{ csrf_token() }}" type="hidden">
                 <br><br>
                <div class="flex justify-end space-x-2">
                 
                  <button type="submit" 
                    class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                  >
                    <span>Next</span>
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
            </div>
          </div>

          <div class="hidden sm:col-span-4 sm:block">
            <div class="sticky top-24 mt-3">
              <ol class="steps with-space-line">
                  <li class="step before:bg-slate-200 dark:before:bg-navy-500">
                    <div
                      class="step-header rounded-full bg-primary text-white dark:bg-accent"
                    >
                      1
                    </div>
                    <h3
                      class="text-xs font-medium text-slate-700 dark:text-navy-100"
                    >
                      Enter Transfer Details
                    </h3>
                  </li>
                   <li class="step before:bg-slate-200 dark:before:bg-navy-500">
                    <div
                      class="step-header rounded-full bg-slate-200 text-slate-800 dark:bg-navy-500 dark:text-white"
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

  

@stop