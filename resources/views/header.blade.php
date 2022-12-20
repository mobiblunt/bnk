<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from lineone.piniastudio.com/dashboards-banking-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Dec 2022 07:04:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />

    <title>Citi Crest Bank</title>
    <link rel="icon" type="image/png" href="{{ url('/') }}/images/favicon.png" />

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ url('/') }}/css/app.css" />

    <!-- Javascript Assets -->
    <script src="{{ url('/') }}/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      rel="stylesheet"
    />
  </head>

  <body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    <div
      class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900"
    >
      <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>

    <!-- Page Wrapper -->
    <div
      id="root"
      class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900"
      x-cloak
    >
      <!-- Sidebar -->
      <div class="sidebar print:hidden">
        <!-- Main Sidebar -->
        <div class="main-sidebar">
          <div
            class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800"
          >
            <!-- Application Logo -->
            <div class="flex pt-4">
              <a href="/">
                <img
                  class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                  src="{{ url('/') }}/images/cler.png"
                  alt="logo"
                />
              </a>
            </div>

            <!-- Main Sections Links -->
            <div
              class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6"
            >
              <!-- Dashobards -->
              <a
                href="{{ route('dashboard') }}"
                class="flex h-11 w-11 items-center justify-center rounded-lg bg-primary/10 text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                x-tooltip.placement.right="'Dashboards'"
              >
                <svg
                  class="h-7 w-7"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    fill="currentColor"
                    fill-opacity=".3"
                    d="M5 14.059c0-1.01 0-1.514.222-1.945.221-.43.632-.724 1.453-1.31l4.163-2.974c.56-.4.842-.601 1.162-.601.32 0 .601.2 1.162.601l4.163 2.974c.821.586 1.232.88 1.453 1.31.222.43.222.935.222 1.945V19c0 .943 0 1.414-.293 1.707C18.414 21 17.943 21 17 21H7c-.943 0-1.414 0-1.707-.293C5 20.414 5 19.943 5 19v-4.94Z"
                  />
                  <path
                    fill="currentColor"
                    d="M3 12.387c0 .267 0 .4.084.441.084.041.19-.04.4-.204l7.288-5.669c.59-.459.885-.688 1.228-.688.343 0 .638.23 1.228.688l7.288 5.669c.21.163.316.245.4.204.084-.04.084-.174.084-.441v-.409c0-.48 0-.72-.102-.928-.101-.208-.291-.355-.67-.65l-7-5.445c-.59-.459-.885-.688-1.228-.688-.343 0-.638.23-1.228.688l-7 5.445c-.379.295-.569.442-.67.65-.102.208-.102.448-.102.928v.409Z"
                  />
                  <path
                    fill="currentColor"
                    d="M11.5 15.5h1A1.5 1.5 0 0 1 14 17v3.5h-4V17a1.5 1.5 0 0 1 1.5-1.5Z"
                  />
                  <path
                    fill="currentColor"
                    d="M17.5 5h-1a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5Z"
                  />
                </svg>
              </a>

              <!-- Apps -->
              

            <!-- Bottom Links -->
            <div class="flex flex-col items-center space-y-3 py-3">
              <!-- Settings -->
              <a
                href="{{ route('view.account', Sentinel::getUser()->id) }}"
                class="flex h-11 w-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              >
                <svg
                  class="h-7 w-7"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-opacity="0.3"
                    fill="currentColor"
                    d="M2 12.947v-1.771c0-1.047.85-1.913 1.899-1.913 1.81 0 2.549-1.288 1.64-2.868a1.919 1.919 0 0 1 .699-2.607l1.729-.996c.79-.474 1.81-.192 2.279.603l.11.192c.9 1.58 2.379 1.58 3.288 0l.11-.192c.47-.795 1.49-1.077 2.279-.603l1.73.996a1.92 1.92 0 0 1 .699 2.607c-.91 1.58-.17 2.868 1.639 2.868 1.04 0 1.899.856 1.899 1.912v1.772c0 1.047-.85 1.912-1.9 1.912-1.808 0-2.548 1.288-1.638 2.869.52.915.21 2.083-.7 2.606l-1.729.997c-.79.473-1.81.191-2.279-.604l-.11-.191c-.9-1.58-2.379-1.58-3.288 0l-.11.19c-.47.796-1.49 1.078-2.279.605l-1.73-.997a1.919 1.919 0 0 1-.699-2.606c.91-1.58.17-2.869-1.639-2.869A1.911 1.911 0 0 1 2 12.947Z"
                  />
                  <path
                    fill="currentColor"
                    d="M11.995 15.332c1.794 0 3.248-1.464 3.248-3.27 0-1.807-1.454-3.272-3.248-3.272-1.794 0-3.248 1.465-3.248 3.271 0 1.807 1.454 3.271 3.248 3.271Z"
                  />
                </svg>
              </a>

              <!-- Profile -->
              <div
                x-data="usePopper({placement:'right-end',offset:12})"
                @click.outside="isShowPopper && (isShowPopper = false)"
                class="flex"
              >
                <button
                  @click="isShowPopper = !isShowPopper"
                  x-ref="popperRef"
                  class="avatar h-12 w-12"
                >
                  <img
                    class="rounded-full"
                    src="{{ url('/') }}/images/avatars/ddownload.jpg"
                    alt="avatar"
                  />
                  <span
                    class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-success dark:border-navy-700"
                  ></span>
                </button>

                <div
                  :class="isShowPopper && 'show'"
                  class="popper-root fixed"
                  x-ref="popperRoot"
                >
                  <div
                    class="popper-box w-64 rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-600 dark:bg-navy-700"
                  >
                    <div
                      class="flex items-center space-x-4 rounded-t-lg bg-slate-100 py-5 px-4 dark:bg-navy-800"
                    >
                      <div class="avatar h-14 w-14">
                        <img
                          class="rounded-full"
                          src="{{ url('/') }}/images/avatars/ddownload.jpg"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <a
                          href="{{ route('view.account', Sentinel::getUser()->id) }}"
                          class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light"
                        >
                          {{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}
                        </a>
                        
                      </div>
                    </div>
                    <div class="flex flex-col pt-2 pb-5">
                      
                      
                      <div class="mt-3 px-4">
                        <button
                          onclick="location.href='{{ route('auth.logout') }}';"
                          class="btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="1.5"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                            />
                          </svg>
                          <span>Logout</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Sidebar Panel -->
        <div class="sidebar-panel">
          <div
            class="flex h-full grow flex-col bg-white pl-[var(--main-sidebar-width)] dark:bg-navy-750"
          >
            <!-- Sidebar Panel Header -->
            <div
              class="flex h-18 w-full items-center justify-between pl-4 pr-1"
            >
              <p
                class="text-base tracking-wider text-slate-800 dark:text-navy-100"
              >
                Dashboard
              </p>
              <button
                @click="$store.global.isSidebarExpanded = false"
                class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7"
                  />
                </svg>
              </button>
            </div>

            <!-- Sidebar Panel Body -->
            <div
              x-data="{expandedItem:null}"
              class="h-[calc(100%-4.5rem)] overflow-x-hidden pb-6"
              x-init="$el._x_simplebar = new SimpleBar($el);"
            >
              
              <div class="my-3 mx-4 h-px bg-slate-200 dark:bg-navy-500"></div>
              <ul class="flex flex-1 flex-col px-4 font-inter">
                <li>
                  <a
                    x-data="navLink"
                    href="{{ route('dashboard') }}"
                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out"
                  >
                    Home
                  </a>
                </li>




                  @if (Sentinel::check() && Sentinel::inRole('administrator'))
                           
                    <li>
                  <a
                    x-data="navLink"
                    href="{{ route('users.index') }}"
                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out"
                  >
                    Users
                  </a>
                </li>
                    @else









                <li x-data="accordionItem('menu-item-1')">
                  <a
                    :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' : 'text-slate-600 dark:text-navy-200  hover:text-slate-800  dark:hover:text-navy-50'"
                    @click="expanded = !expanded"
                    class="flex items-center justify-between py-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out"
                    href="javascript:void(0);"
                  >
                    <span>Account Details</span>
                    <svg
                      :class="expanded && 'rotate-90'"
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
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
                  </a>
                  <ul x-collapse x-show="expanded">
                    <li>
                      <a
                        x-data="navLink"
                        href="{{ route('get.trans') }}"
                        :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                        class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                      >
                        <div class="flex items-center space-x-2">
                          <div
                            class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                          ></div>
                          <span>Account Statement</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a
                        x-data="navLink"
                        href="{{ route('get.trans') }}"
                        :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                        class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                      >
                        <div class="flex items-center space-x-2">
                          <div
                            class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                          ></div>
                          <span>Transaction History</span>
                        </div>
                      </a>
                    </li>

                  </ul>
                </li>
                <li x-data="accordionItem('menu-item-2')">
                  <a
                    :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' : 'text-slate-600 dark:text-navy-200  hover:text-slate-800  dark:hover:text-navy-50'"
                    @click="expanded = !expanded"
                    class="flex items-center justify-between py-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out"
                    href="javascript:void(0);"
                  >
                    <span>Transfers</span>
                    <svg
                      :class="expanded && 'rotate-90'"
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
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
                  </a>
                  <ul x-collapse x-show="expanded">
                    <li>
                      <a
                        x-data="navLink"
                        href="{{ route('get.dep') }}"
                        :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                        class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                      >
                        <div class="flex items-center space-x-2">
                          <div
                            class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                          ></div>
                          <span>Local Transfer</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a
                        x-data="navLink"
                        href="{{ route('get.int') }}"
                        :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                        class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
                      >
                        <div class="flex items-center space-x-2">
                          <div
                            class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
                          ></div>
                          <span>International Transfers</span>
                        </div>
                      </a>
                    </li>
                    
                    
                  </ul>
                  
                </li>
                <li>
                  <a
                    x-data="navLink"
                    href="{{ route('view.account', Sentinel::getUser()->id) }}"
                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out"
                  >
                    Settings
                  </a>
                </li>

                @endif
                
                <li>
                  <a
                    x-data="navLink"
                    href="{{ route('auth.logout') }}"
                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out"
                  >
                    Log Out
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- App Header Wrapper-->
      <nav class="header print:hidden">
        <!-- App Header  -->
        <div
          class="header-container relative flex w-full bg-white dark:bg-navy-750 print:hidden"
        >
          <!-- Header Items -->
          <div class="flex w-full items-center justify-between">
            <!-- Left: Sidebar Toggle Button -->
            <div class="h-7 w-7">
              <button
                class="menu-toggle ml-0.5 flex h-7 w-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80"
                :class="$store.global.isSidebarExpanded && 'active'"
                @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded"
              >
                <span></span>
                <span></span>
                <span></span>
              </button>
            </div>

            <!-- Right: Header buttons -->
            <div class="-mr-1.5 flex items-center space-x-2">
              <!-- Mobile Search Toggle -->
              <button
                @click="$store.global.isSearchbarActive = !$store.global.isSearchbarActive"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5.5 w-5.5 text-slate-500 dark:text-navy-100"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="1.5"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                  />
                </svg>
              </button>

              <!-- Main Searchbar -->
              
              <!-- Dark Mode Toggle -->
              <button
                @click="$store.global.isDarkModeEnabled = !$store.global.isDarkModeEnabled"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              >
                <svg
                  x-show="$store.global.isDarkModeEnabled"
                  x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                  x-transition:enter-start="scale-75"
                  x-transition:enter-end="scale-100 static"
                  class="h-6 w-6 text-amber-400"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M11.75 3.412a.818.818 0 01-.07.917 6.332 6.332 0 00-1.4 3.971c0 3.564 2.98 6.494 6.706 6.494a6.86 6.86 0 002.856-.617.818.818 0 011.1 1.047C19.593 18.614 16.218 21 12.283 21 7.18 21 3 16.973 3 11.956c0-4.563 3.46-8.31 7.925-8.948a.818.818 0 01.826.404z"
                  />
                </svg>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  x-show="!$store.global.isDarkModeEnabled"
                  x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                  x-transition:enter-start="scale-75"
                  x-transition:enter-end="scale-100 static"
                  class="h-6 w-6 text-amber-400"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    clip-rule="evenodd"
                  />
                </svg>
              </button>
              <!-- Monochrome Mode Toggle -->
              <button
                @click="$store.global.isMonochromeModeEnabled = !$store.global.isMonochromeModeEnabled"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              >
                <i
                  class="fa-solid fa-palette bg-gradient-to-r from-sky-400 to-blue-600 bg-clip-text text-lg font-semibold text-transparent"
                ></i>
              </button>

              <!-- Notification-->
              

              <!-- Right Sidebar Toggle -->
              <button
                @click="$store.global.isRightSidebarExpanded = true"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5.5 w-5.5 text-slate-500 dark:text-navy-100"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </nav>

      <!-- Mobile Searchbar -->
      

      <!-- Right Sidebar -->
      <div
        x-show="$store.global.isRightSidebarExpanded"
        @keydown.window.escape="$store.global.isRightSidebarExpanded = false"
      >
        <div
          class="fixed inset-0 z-[150] bg-slate-900/60 transition-opacity duration-200"
          @click="$store.global.isRightSidebarExpanded = false"
          x-show="$store.global.isRightSidebarExpanded"
          x-transition:enter="ease-out"
          x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100"
          x-transition:leave="ease-in"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
        ></div>
        <div class="fixed right-0 top-0 z-[151] h-full w-full sm:w-80">
          <div
            x-data="{activeTab:'tabHome'}"
            class="relative flex h-full w-full transform-gpu flex-col bg-white transition-transform duration-200 dark:bg-navy-750"
            x-show="$store.global.isRightSidebarExpanded"
            x-transition:enter="ease-out"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="ease-in"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
          >
            <div class="flex items-center justify-between py-2 px-4">
              <p
                x-show="activeTab === 'tabHome'"
                class="flex shrink-0 items-center space-x-1.5"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                  />
                </svg>
                <span class="text-xs">25 May, 2022</span>
              </p>
              <p
                x-show="activeTab === 'tabProjects'"
                class="flex shrink-0 items-center space-x-1.5"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="1.5"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"
                  />
                </svg>
                <span class="text-xs">Projects</span>
              </p>
              <p
                x-show="activeTab === 'tabActivity'"
                class="flex shrink-0 items-center space-x-1.5"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="1.5"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                  />
                </svg>
                <span class="text-xs">Activity</span>
              </p>

              <button
                @click="$store.global.isRightSidebarExpanded=false"
                class="btn -mr-1 h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4 w-4"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                  />
                </svg>
              </button>
            </div>

            <div
              x-show="activeTab === 'tabHome'"
              x-transition:enter="transition-all duration-500 easy-in-out"
              x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
              x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
              class="is-scrollbar-hidden overflow-y-auto overscroll-contain pt-1"
            >
              <label class="relative flex px-3">
                <input
                  class="form-input peer h-8 w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 text-xs+ ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                  placeholder="Search here..."
                  type="text"
                />
                <span
                  class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 transition-colors duration-200"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z"
                    />
                  </svg>
                </span>
              </label>
              <div class="mt-3">
                <h2
                  class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
                >
                  Banking cards
                </h2>
                <div
                  class="swiper mt-3 px-3"
                  x-init="$nextTick(()=>new Swiper($el,{  slidesPerView: 'auto', spaceBetween: 16}))"
                >
                  <div class="swiper-wrapper">
                    <div
                      class="swiper-slide relative flex h-28 w-48 flex-col overflow-hidden rounded-xl bg-gradient-to-br from-purple-500 to-indigo-600 p-3"
                    >
                      <div class="grow">
                        <img
                          class="h-3"
                          src="images/payments/cc-visa-white.svg"
                          alt="image"
                        />
                      </div>
                      <div class="text-white">
                        <p class="text-lg font-semibold tracking-wide">
                          $2,139.22
                        </p>
                        <p class="mt-1 text-xs font-medium">
                          **** **** **** 8945
                        </p>
                      </div>
                      <div
                        class="mask is-reuleaux-triangle absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"
                      ></div>
                    </div>
                    <div
                      class="swiper-slide relative flex h-28 w-48 flex-col overflow-hidden rounded-xl bg-gradient-to-br from-pink-500 to-rose-500 p-3"
                    >
                      
                      <div class="grow">
                        <img
                          class="h-3"
                          src="images/payments/cc-visa-white.svg"
                          alt="image"
                        />
                      </div>
                      <div class="text-white">
                        <p class="text-lg font-semibold tracking-wide">
                          $2,139.22
                        </p>
                        <p class="mt-1 text-xs font-medium">
                          **** **** **** 8945
                        </p>
                      </div>
                      <div
                        class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>

              

              <div class="mt-4">
                <div class="grid grid-cols-2 gap-3 px-3">
                  <div
                    class="rounded-lg bg-slate-150 px-2.5 py-2 dark:bg-navy-600"
                  >
                    <div class="flex items-center justify-between space-x-1">
                      <p>
                        <span
                          class="text-lg font-medium text-slate-700 dark:text-navy-100"
                          >11.3</span
                        >
                        <span class="text-xs">hr</span>
                      </p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4.5 w-4.5 text-secondary dark:text-secondary-light"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </div>

                    <p class="mt-0.5 text-tiny+ uppercase">Working Hours</p>

                    <div
                      class="progress mt-3 h-1.5 bg-secondary/15 dark:bg-secondary-light/25"
                    >
                      <div
                        class="is-active relative w-8/12 overflow-hidden rounded-full bg-secondary dark:bg-secondary-light"
                      ></div>
                    </div>

                    <div
                      class="mt-1.5 flex items-center justify-between text-xs text-slate-400 dark:text-navy-300"
                    >
                      <button
                        class="btn -ml-1 h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-4 w-4"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="1.5"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                          />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                          />
                        </svg>
                      </button>
                      <span> 71%</span>
                    </div>
                  </div>
                  <div
                    class="rounded-lg bg-slate-150 px-2.5 py-2 dark:bg-navy-600"
                  >
                    <div class="flex items-center justify-between space-x-1">
                      <p>
                        <span
                          class="text-lg font-medium text-slate-700 dark:text-navy-100"
                          >13</span
                        >
                        <span class="text-xs">/22</span>
                      </p>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4.5 w-4.5 text-success"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </div>

                    <p class="mt-0.5 text-tiny+ uppercase">Completed tasks</p>

                    <div
                      class="progress mt-3 h-1.5 bg-success/15 dark:bg-success/25"
                    >
                      <div
                        class="relative w-6/12 overflow-hidden rounded-full bg-success"
                      ></div>
                    </div>

                    <div
                      class="mt-1.5 flex items-center justify-between text-xs text-slate-400 dark:text-navy-300"
                    >
                      <button
                        class="btn -ml-1 h-6 w-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-4 w-4"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="1.5"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                          />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                          />
                        </svg>
                      </button>
                      <span> 49%</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-4">
                <h2
                  class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
                >
                  Stock Market
                </h2>
                <div class="mt-3 grid grid-cols-2 gap-3 px-3">
                  <div class="rounded-lg bg-slate-100 p-2.5 dark:bg-navy-600">
                    <div class="flex items-center space-x-2">
                      <img
                        class="h-10 w-10"
                        src="images/logos/bitcoin.svg"
                        alt="image"
                      />
                      <div>
                        <h2
                          class="font-medium tracking-wide text-slate-700 dark:text-navy-100"
                        >
                          BTC
                        </h2>
                        <p class="text-xs">Bitcoin</p>
                      </div>
                    </div>

                    <div class="ax-transparent-gridline">
                      <div
                        x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.stockMarket1); $el._x_chart.render() });"
                      ></div>
                    </div>

                    <div class="mt-2 flex items-center justify-between">
                      <p
                        class="font-medium tracking-wide text-slate-700 dark:text-navy-100"
                      >
                        60.33$
                      </p>
                      <p class="text-xs font-medium tracking-wide text-success">
                        +3.3%
                      </p>
                    </div>
                  </div>

                  <div class="rounded-lg bg-slate-100 p-2.5 dark:bg-navy-600">
                    <div class="flex items-center space-x-2">
                      <img
                        class="h-10 w-10"
                        src="images/logos/solana.svg"
                        alt="image"
                      />
                      <div>
                        <h2
                          class="font-medium tracking-wide text-slate-700 dark:text-navy-100"
                        >
                          SOL
                        </h2>
                        <p class="text-xs">Solana</p>
                      </div>
                    </div>

                    <div class="ax-transparent-gridline">
                      <div
                        x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.stockMarket2); $el._x_chart.render() });"
                      ></div>
                    </div>

                    <div class="mt-2 flex items-center justify-between">
                      <p
                        class="font-medium tracking-wide text-slate-700 dark:text-navy-100"
                      >
                        20.56$
                      </p>
                      <p class="text-xs font-medium tracking-wide text-success">
                        +4.11%
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              

              <div class="mt-3 px-3">
                <h2
                  class="text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
                >
                  Settings
                </h2>
                <div class="mt-2 flex flex-col space-y-2">
                  <label class="inline-flex items-center space-x-2">
                    <input
                      x-model="$store.global.isDarkModeEnabled"
                      class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white"
                      type="checkbox"
                    />
                    <span>Dark Mode</span>
                  </label>
                  <label class="inline-flex items-center space-x-2">
                    <input
                      x-model="$store.global.isMonochromeModeEnabled"
                      class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white"
                      type="checkbox"
                    />
                    <span>Monochrome Mode</span>
                  </label>
                </div>
              </div>

              
              <div class="h-18"></div>
            </div>

            <div
              x-show="activeTab === 'tabProjects'"
              x-transition:enter="transition-all duration-500 easy-in-out"
              x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
              x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
              class="is-scrollbar-hidden overflow-y-auto overscroll-contain px-3 pt-1"
            >
              <div class="grid grid-cols-2 gap-3">
                <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                  <div class="flex justify-between space-x-1">
                    <p
                      class="text-xl font-semibold text-slate-700 dark:text-navy-100"
                    >
                      14
                    </p>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      stroke-width="1.5"
                      class="h-5 w-5 text-primary dark:text-accent"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>
                  </div>
                  <p class="mt-1 text-xs+">Pending</p>
                </div>
                <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                  <div class="flex justify-between">
                    <p
                      class="text-xl font-semibold text-slate-700 dark:text-navy-100"
                    >
                      36
                    </p>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5 text-success"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
                      />
                    </svg>
                  </div>
                  <p class="mt-1 text-xs+">Completed</p>
                </div>
                <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                  <div class="flex justify-between">
                    <p
                      class="text-xl font-semibold text-slate-700 dark:text-navy-100"
                    >
                      143
                    </p>

                    <i class="fa fa-spinner text-base text-warning"></i>
                  </div>
                  <p class="mt-1 text-xs+">In Progress</p>
                </div>
                <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                  <div class="flex justify-between">
                    <p
                      class="text-xl font-semibold text-slate-700 dark:text-navy-100"
                    >
                      279
                    </p>

                    <i class="fa-solid fa-list-check text-base text-info"></i>
                  </div>
                  <p class="mt-1 text-xs+">Total</p>
                </div>
              </div>

              <div
                class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600"
              >
                <div class="flex items-center space-x-3">
                  <img
                    class="h-10 w-10 rounded-lg object-cover object-center"
                    src="images/illustrations/lms-ui.svg"
                    alt="image"
                  />
                  <div>
                    <p
                      class="font-medium leading-snug text-slate-700 dark:text-navy-100"
                    >
                      LMS App Design
                    </p>
                    <p class="text-xs text-slate-400 dark:text-navy-300">
                      Updated at 7 Sep
                    </p>
                  </div>
                </div>

                <div class="mt-4">
                  <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                    <div
                      class="w-4/12 rounded-full bg-primary dark:bg-accent"
                    ></div>
                  </div>
                  <p
                    class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light"
                  >
                    25%
                  </p>
                </div>

                <div class="mt-3 flex items-center justify-between space-x-2">
                  <div class="flex -space-x-3">
                    <div class="avatar h-7 w-7 hover:z-10">
                      <img
                        class="rounded-full ring ring-white dark:ring-navy-700"
                        src="images/avatar/avatar-16.jpg"
                        alt="avatar"
                      />
                    </div>
                    <div class="avatar h-7 w-7 hover:z-10">
                      <div
                        class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700"
                      >
                        jd
                      </div>
                    </div>
                    <div class="avatar h-7 w-7 hover:z-10">
                      <img
                        class="rounded-full ring ring-white dark:ring-navy-700"
                        src="images/avatar/avatar-20.jpg"
                        alt="avatar"
                      />
                    </div>
                  </div>
                  <button
                    class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5 rotate-45"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M7 11l5-5m0 0l5 5m-5-5v12"
                      />
                    </svg>
                  </button>
                </div>
              </div>

              <div
                class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600"
              >
                <div class="flex items-center space-x-3">
                  <img
                    class="h-10 w-10 rounded-lg object-cover object-center"
                    src="images/illustrations/store-ui.svg"
                    alt="image"
                  />
                  <div>
                    <p
                      class="font-medium leading-snug text-slate-700 dark:text-navy-100"
                    >
                      Store Dashboard
                    </p>
                    <p class="text-xs text-slate-400 dark:text-navy-300">
                      Updated at 11 Sep
                    </p>
                  </div>
                </div>

                <div class="mt-4">
                  <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                    <div
                      class="w-6/12 rounded-full bg-primary dark:bg-accent"
                    ></div>
                  </div>
                  <p
                    class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light"
                  >
                    49%
                  </p>
                </div>

                <div class="mt-3 flex items-center justify-between space-x-2">
                  <div class="flex -space-x-3">
                    <div class="avatar h-7 w-7 hover:z-10">
                      <img
                        class="rounded-full ring ring-white dark:ring-navy-700"
                        src="images/avatar/avatar-17.jpg"
                        alt="avatar"
                      />
                    </div>
                    <div class="avatar h-7 w-7 hover:z-10">
                      <div
                        class="is-initial rounded-full bg-warning text-xs+ uppercase text-white ring ring-white dark:ring-navy-700"
                      >
                        dv
                      </div>
                    </div>
                    <div class="avatar h-7 w-7 hover:z-10">
                      <img
                        class="rounded-full ring ring-white dark:ring-navy-700"
                        src="images/avatar/avatar-19.jpg"
                        alt="avatar"
                      />
                    </div>
                  </div>
                  <button
                    class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5 rotate-45"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M7 11l5-5m0 0l5 5m-5-5v12"
                      />
                    </svg>
                  </button>
                </div>
              </div>

              <div
                class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600"
              >
                <div class="flex items-center space-x-3">
                  <img
                    class="h-10 w-10 rounded-lg object-cover object-center"
                    src="images/illustrations/chat-ui.svg"
                    alt="image"
                  />
                  <div>
                    <p
                      class="font-medium leading-snug text-slate-700 dark:text-navy-100"
                    >
                      Chat Mobile App
                    </p>
                    <p class="text-xs text-slate-400 dark:text-navy-300">
                      Updated at 19 Sep
                    </p>
                  </div>
                </div>

                <div class="mt-4">
                  <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                    <div
                      class="w-2/12 rounded-full bg-primary dark:bg-accent"
                    ></div>
                  </div>
                  <p
                    class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light"
                  >
                    13%
                  </p>
                </div>

                <div class="mt-3 flex items-center justify-between space-x-2">
                  <div class="flex -space-x-3">
                    <div class="avatar h-7 w-7 hover:z-10">
                      <img
                        class="rounded-full ring ring-white dark:ring-navy-700"
                        src="images/avatar/avatar-5.jpg"
                        alt="avatar"
                      />
                    </div>
                    <div class="avatar h-7 w-7 hover:z-10">
                      <div
                        class="is-initial rounded-full bg-error text-xs+ uppercase text-white ring ring-white dark:ring-navy-700"
                      >
                        gt
                      </div>
                    </div>
                    <div class="avatar h-7 w-7 hover:z-10">
                      <img
                        class="rounded-full ring ring-white dark:ring-navy-700"
                        src="images/avatar/avatar-11.jpg"
                        alt="avatar"
                      />
                    </div>
                  </div>
                  <button
                    class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5 rotate-45"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M7 11l5-5m0 0l5 5m-5-5v12"
                      />
                    </svg>
                  </button>
                </div>
              </div>

              <div
                class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600"
              >
                <div class="flex items-center space-x-3">
                  <img
                    class="h-10 w-10 rounded-lg object-cover object-center"
                    src="images/illustrations/nft.svg"
                    alt="image"
                  />
                  <div>
                    <p
                      class="font-medium leading-snug text-slate-700 dark:text-navy-100"
                    >
                      NFT Marketplace App
                    </p>
                    <p class="text-xs text-slate-400 dark:text-navy-300">
                      Updated at 5 Sep
                    </p>
                  </div>
                </div>

                <div class="mt-4">
                  <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                    <div
                      class="w-9/12 rounded-full bg-primary dark:bg-accent"
                    ></div>
                  </div>
                  <p
                    class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light"
                  >
                    78%
                  </p>
                </div>

                <div class="mt-3 flex items-center justify-between space-x-2">
                  <div class="flex -space-x-3">
                    <div class="avatar h-7 w-7 hover:z-10">
                      <img
                        class="rounded-full ring ring-white dark:ring-navy-700"
                        src="images/avatar/avatar-8.jpg"
                        alt="avatar"
                      />
                    </div>
                    <div class="avatar h-7 w-7 hover:z-10">
                      <div
                        class="is-initial rounded-full bg-success text-xs+ uppercase text-white ring ring-white dark:ring-navy-700"
                      >
                        jd
                      </div>
                    </div>
                    <div class="avatar h-7 w-7 hover:z-10">
                      <img
                        class="rounded-full ring ring-white dark:ring-navy-700"
                        src="images/avatar/avatar-12.jpg"
                        alt="avatar"
                      />
                    </div>
                  </div>
                  <button
                    class="btn h-7 w-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5 rotate-45"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M7 11l5-5m0 0l5 5m-5-5v12"
                      />
                    </svg>
                  </button>
                </div>
              </div>

              <div class="h-18"></div>
            </div>

            <div
              x-show="activeTab === 'tabActivity'"
              x-transition:enter="transition-all duration-500 easy-in-out"
              x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
              x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
              class="is-scrollbar-hidden overflow-y-auto overscroll-contain pt-1"
            >
              <div
                class="mx-3 flex flex-col items-center rounded-lg bg-slate-100 py-3 px-8 dark:bg-navy-600"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-8 w-8 text-secondary dark:text-secondary-light"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                  />
                </svg>

                <p class="mt-2 text-xs">Today</p>

                <p
                  class="text-lg font-medium text-slate-700 dark:text-navy-100"
                >
                  6hr 22m
                </p>

                <div
                  class="progress mt-3 h-2 bg-secondary/15 dark:bg-secondary-light/25"
                >
                  <div
                    class="is-active relative w-8/12 overflow-hidden rounded-full bg-secondary dark:bg-secondary-light"
                  ></div>
                </div>

                <button
                  class="btn mt-5 space-x-2 rounded-full border border-slate-300 px-3 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"
                    />
                  </svg>
                  <span> Download Report</span>
                </button>
              </div>

              
              <div class="h-18"></div>
            </div>

            <div
              class="pointer-events-none absolute bottom-4 flex w-full justify-center"
            >
              <div
                class="pointer-events-auto mx-auto flex space-x-1 rounded-full border border-slate-150 bg-white px-4 py-0.5 shadow-lg dark:border-navy-700 dark:bg-navy-900"
              >
                <button
                  @click="activeTab = 'tabHome'"
                  :class="activeTab === 'tabHome' && 'text-primary dark:text-accent'"
                  class="btn h-9 rounded-full py-0 px-4 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25"
                >
                  <svg
                    x-show="activeTab === 'tabHome'"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                    />
                  </svg>
                  <svg
                    x-show="activeTab !== 'tabHome'"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 shrink-0"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.5"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    />
                  </svg>
                </button>
                <button
                  @click="activeTab = 'tabProjects'"
                  :class="activeTab === 'tabProjects' && 'text-primary dark:text-accent'"
                  class="btn h-9 rounded-full py-0 px-4 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25"
                >
                  <svg
                    x-show="activeTab === 'tabProjects'"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    />
                  </svg>

                  <svg
                    x-show="activeTab !== 'tabProjects'"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 shrink-0"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.5"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"
                    />
                  </svg>
                </button>
                <button
                  @click="activeTab = 'tabActivity'"
                  :class="activeTab === 'tabActivity' && 'text-primary dark:text-accent'"
                  class="btn h-9 rounded-full py-0 px-4 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25"
                >
                  <svg
                    x-show="activeTab ===  'tabActivity'"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 shrink-0"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <svg
                    x-show="activeTab !==  'tabActivity'"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 shrink-0"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.5"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)] pb-8">
      @include('Centaur::notifications')
      
            @yield('content')
       </main>
    </div>
    <!-- 
        This is a place for Alpine.js Teleport feature 
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    <script>
      window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
  </body>

<!-- Mirrored from lineone.piniastudio.com/dashboards-banking-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Dec 2022 07:04:01 GMT -->
</html>
