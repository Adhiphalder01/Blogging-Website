<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/editprofile.css')}}">
        <link rel="stylesheet" href="{{asset('css/preloader.css')}}">
        <link rel="shortcut icon" href="{{asset('/Pictures/inkspire.png')}}" type="image/svg+xml">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Explore</title>

        <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

        <style>
            .section-dropdown-two{
                position: absolute;
                width: 366px;
                left: -7px;
                border-radius: 0px 13px 13px 0px;
                padding: 0;
            }
        </style>

    </head>
    <body>


                <!-- 
         - SECTION PRELOADER
        -->

        <div class="preloader">
            <svg id="preloader" width="240px" height="120px" viewBox="0 0 240 120" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
        
                <path id="loop-normal" class="st1"
                    d="M120.5,60.5L146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0z">
                    <animate attributeName="stroke-dasharray" from="500, 50" to="450 50" begin="0s" dur="2s"
                        repeatCount="indefinite" />
                    <animate attributeName="stroke-dashoffset" from="-40" to="-540" begin="0s" dur="2s"
                        repeatCount="indefinite" />
                </path>
        
                <path id="loop-offset"
                    d="M146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0L120.5,60.5L146.48,87.02z">
                </path>
        
                <path id="socket" d="M7.5,0c0,8.28-6.72,15-15,15l0-30C0.78-15,7.5-8.28,7.5,0z">
                    <animateMotion dur="2s" repeatCount="indefinite" rotate="auto" keyTimes="0;1"
                        keySplines="0.42, 0.0, 0.58, 1.0">
                        <mpath xlink:href="#loop-offset" />
                    </animateMotion>
                </path>
        
                <path id="plug" d="M0,9l15,0l0-5H0v-8.5l15,0l0-5H0V-15c-8.29,0-15,6.71-15,15c0,8.28,6.71,15,15,15V9z">
                    <animateMotion dur="2s" rotate="auto" repeatCount="indefinite" keyTimes="0;1" keySplines="0.42, 0, 0.58, 1">
                        <mpath xlink:href="#loop-normal" />
                    </animateMotion>
                </path>
        
            </svg>

            <script>
                window.addEventListener("load", function () {
                    document.querySelector(".preloader").classList.add("hidden");
                    setTimeout(() => document.querySelector(".preloader").style.display = "none", 500);
                });
            </script>
        </div>



        <header>
            <a href="/" class="logo"><img class="logo-img" src="/Pictures/inkspire.png"></a>
            <input type="text" placeholder="Search" id="searchInput">

            <div class="menu">
                <div class="sec-center"> 	
                    <input class="dropdown" type="checkbox" id="dropdown1" name="dropdown"/>
                    <label class="for-dropdown" for="dropdown1"> <i class="fa-regular fa-message"></i> </label> 
                    <div class="section-dropdown"> 
                        <h1>Chats</h1> <i href="#" class="fa-brands fa-facebook-messenger" style="top: -32px;"></i>
                    </div>

                    <div class="section-dropdown section-dropdown-two">
                        <h1>Threads</h1>
                        <input type="checkbox" name="section-message" id="section-message" style="display: none;">
                        <div class="section-dropdown-two-body">
                            <label for="section-message" class="chat-button ">Go to Message</label>
                        </div>

                        <div class="section-dropdown-two-body-second">
                            <div class="section-dropdown-two-body-second-img">
                                <img style="width: 82px" src="https://www.redditstatic.com/chat-web/images/welcome-6AUNLRD4.png" alt="">
                            </div>
                            <div class="section-dropdown-two-body-second-para">
                                <p>Welcome to chat</p>
                                <p style="font-weight: 500;">Start a direct or group chat with other users</p>
                            </div>
                            <div class="section-dropdown-two-body-second-button" style="margin-top: 9px;">
                                <button class="chat-button" style="padding-top: 0px;">Start new Chat</button>
                            </div>
                        </div>

                    </div>
                </div>
            
                <a href="/create" style="position: static"><button href="#" class="create"><i class="fa-solid fa-plus"></i> <span>Create</span></button></a>
            
                <div class="sec-center"> 	
                    <input class="dropdown2" type="checkbox" id="dropdown2" name="dropdown"/>
                    <label class="for-dropdown" for="dropdown2"> <i class="fa-regular fa-bell"></i> </label> 
                    <div class="section-dropdown2"> 
                        <h1>Notifications</h1>

                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>

                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="profile-container">
                                <div class="profile-img"></div>
                                <div class="profile-info">
                                    <span>Adhip Halder</span>
                                    <p>You have 0 notifications</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            
                <div class="sec-center">    	
                    <input class="dropdown3" type="checkbox" id="dropdown3" name="dropdown"/>
                    <label class="for-dropdown3" for="dropdown3"> <button class="dropdown3-click-button"><i class="fa-solid fa-user"></i></button> </label> 
                    <p class="dropdown3-floating-message">Open profile menu</p>
                    
                    <div class="section-dropdown3"> 

                        <div class="section-dropdown3-profile">
                            {{-- <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">  --}}
                            <img src="{{ session('user') && session('user')->profile_pic ? asset('storage/' . session('user')->profile_pic) : 'https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"  alt="Profile Picture" >
                            <div class="section-dropdown3-profile-text">
                                <button>View Profile</button>
                                {{-- <p>@username_agent07</p> --}}
                                <p class="user_name">
                                    @if(session('user'))
                                        {{ session('user')->user_name }}
                                    @else
                                        Guest
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="section-dropdown3-settings">
                            <span>
                                <svg rpl="" fill="currentColor" height="20" icon-name="settings-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 20c-.401 0-.802-.027-1.2-.079a1.145 1.145 0 0 1-.992-1.137v-1.073a.97.97 0 0 0-.627-.878A.98.98 0 0 0 6.1 17l-.755.753a1.149 1.149 0 0 1-1.521.1 10.16 10.16 0 0 1-1.671-1.671 1.149 1.149 0 0 1 .1-1.523L3 13.906a.97.97 0 0 0 .176-1.069.98.98 0 0 0-.887-.649H1.216A1.145 1.145 0 0 1 .079 11.2a9.1 9.1 0 0 1 0-2.393 1.145 1.145 0 0 1 1.137-.992h1.073a.97.97 0 0 0 .878-.627A.979.979 0 0 0 3 6.1l-.754-.754a1.15 1.15 0 0 1-.1-1.522 10.16 10.16 0 0 1 1.673-1.676 1.155 1.155 0 0 1 1.522.1L6.1 3a.966.966 0 0 0 1.068.176.98.98 0 0 0 .649-.887V1.216A1.145 1.145 0 0 1 8.8.079a9.129 9.129 0 0 1 2.393 0 1.144 1.144 0 0 1 .991 1.137v1.073a.972.972 0 0 0 .628.878A.977.977 0 0 0 13.905 3l.754-.754a1.152 1.152 0 0 1 1.522-.1c.62.49 1.18 1.05 1.671 1.671a1.15 1.15 0 0 1-.1 1.522L17 6.1a.967.967 0 0 0-.176 1.068.98.98 0 0 0 .887.649h1.073a1.145 1.145 0 0 1 1.137.991 9.096 9.096 0 0 1 0 2.392 1.145 1.145 0 0 1-1.137.992h-1.073A1.041 1.041 0 0 0 17 13.905l.753.755a1.149 1.149 0 0 1 .1 1.521c-.49.62-1.05 1.18-1.671 1.671a1.149 1.149 0 0 1-1.522-.1L13.906 17a.97.97 0 0 0-1.069-.176.981.981 0 0 0-.65.887v1.073a1.144 1.144 0 0 1-.99 1.137A9.431 9.431 0 0 1 10 20Zm-.938-1.307a7.638 7.638 0 0 0 1.875 0v-.982a2.292 2.292 0 0 1 3.853-1.6l.693.694a8.796 8.796 0 0 0 1.326-1.326l-.694-.694a2.29 2.29 0 0 1 1.6-3.851h.982a7.746 7.746 0 0 0 0-1.876h-.982a2.213 2.213 0 0 1-2.034-1.4 2.223 2.223 0 0 1 .438-2.451l.694-.693a8.76 8.76 0 0 0-1.327-1.326l-.692.694a2.22 2.22 0 0 1-2.434.445 2.221 2.221 0 0 1-1.419-2.041v-.979a7.638 7.638 0 0 0-1.875 0v.982a2.213 2.213 0 0 1-1.4 2.034 2.23 2.23 0 0 1-2.456-.438l-.693-.694a8.757 8.757 0 0 0-1.326 1.327l.694.692a2.216 2.216 0 0 1 .445 2.434 2.22 2.22 0 0 1-2.041 1.418h-.982a7.746 7.746 0 0 0 0 1.876h.982a2.213 2.213 0 0 1 2.034 1.4 2.223 2.223 0 0 1-.438 2.451l-.694.693c.394.488.838.933 1.326 1.326l.694-.694a2.218 2.218 0 0 1 2.433-.445 2.22 2.22 0 0 1 1.418 2.041v.983ZM10 13.229a3.23 3.23 0 1 1 0-6.458 3.23 3.23 0 0 1 0 6.458Zm0-5.208a1.979 1.979 0 1 0 0 3.958 1.979 1.979 0 0 0 0-3.958Z"></path>
                                </svg>
                                <span style="font-size: 14px; font-weight: 500; color: white;">Settings</span>
                            </span>
                        </div>

                        {{-- <div class="section-dropdown3-logout">
                            <span>
                                <svg rpl="" fill="currentColor" height="20" icon-name="logout-outline" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.991 10.625H1v-1.25h10.991l-1.933-1.933.884-.884 3 3a.624.624 0 0 1 0 .884l-3 3-.884-.884 1.933-1.933ZM15.375 1h-9.75A2.629 2.629 0 0 0 3 3.625v.792h1.25v-.792A1.377 1.377 0 0 1 5.625 2.25h9.75a1.377 1.377 0 0 1 1.375 1.375v12.75a1.377 1.377 0 0 1-1.375 1.375h-9.75a1.377 1.377 0 0 1-1.375-1.375v-.792H3v.792A2.63 2.63 0 0 0 5.625 19h9.75A2.63 2.63 0 0 0 18 16.375V3.625A2.63 2.63 0 0 0 15.375 1Z"></path>
                                </svg>
                                <span>Log Out</span>
                            </span>
                        </div> --}}

                    </div>
                </div>
            </div>
        </header>  


        <nav class="sidebar" id="sidebar">
            <div class="sidebar__container">

                <div class="sidebar__content">
                    <div>
                        <h3 class="sidebar__title">MANAGE</h3>

                        <div class="sidebar__list">
                        <a href="#" class="sidebar__link active-link">
                            <i class="fa-solid fa-house"></i>
                            <span>Home</span>
                        </a>
                        
                        <a href="#" class="sidebar__link">
                            <i class="fa-solid fa-arrow-trend-up"></i>
                            <span>Popular</span>
                        </a>

                        <a href="/explore" class="sidebar__link">
                            <i class="fa-solid fa-table"></i>
                            <span>Explore</span>
                        </a>
                        </div>
                    </div>

                    <div>
                        <h3 class="sidebar__title">YOUR COMMUNITIES</h3>

                        <div class="sidebar__list">
                            <a href="/createcommunity" class="sidebar__link">
                                <i class="fa-solid fa-plus"></i>
                                <span>Create Community </span>
                            </a>


                            {{-- @php
                                $userId = session('user_id');
                                $user = \App\Models\User::find($userId);

                                $createdCommunities = \App\Models\Communities::where('user_id', $userId)->get();

                                $joinedCommunities = \DB::table('join')
                                    ->join('communities', 'join.community_id', '=', 'communities.community_id')
                                    ->where('join.user_id', $userId)
                                    ->select('communities.community_name', 'communities.community_pic', 'join.created_at as joined_at')
                                    ->get();

                                $allCommunities = collect();

                                foreach ($createdCommunities as $community) {
                                    $allCommunities->push((object) [
                                        'community_name' => $community->community_name,
                                        'community_pic' => $community->community_pic,
                                        'created_at' => $community->created_at, 
                                        'type' => 'created'
                                    ]);
                                }

                                foreach ($joinedCommunities as $community) {
                                    $allCommunities->push((object) [
                                        'community_name' => $community->community_name,
                                        'community_pic' => $community->community_pic,
                                        'created_at' => $community->joined_at,
                                        'type' => 'joined'
                                    ]);
                                }

                                $sortedCommunities = $allCommunities->sortByDesc('created_at');
                            @endphp --}}

                            @php
                                $userId = session('user_id');

                                $createdCommunities = \App\Models\Communities::where('user_id', $userId)->get();

                                $joinedCommunities = \DB::table('join')
                                    ->join('communities', 'join.community_id', '=', 'communities.community_id')
                                    ->where('join.user_id', $userId)
                                    ->select('communities.community_name', 'communities.community_pic', 'join.created_at as joined_at')
                                    ->get();
                            @endphp

                            
                            {{-- @if ($sortedCommunities->isNotEmpty())
                                @foreach ($sortedCommunities as $community)
                                    <a href="{{ route('show.mycommunity', ['community_name' => $community->community_name]) }}" class="sidebar__link">
                                        <div class="profile-img1">
                                            @if (!empty($community->community_pic))
                                                <img src="{{ asset('storage/' . $community->community_pic) }}" alt="{{ $community->community_name }}">
                                            @else
                                                <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Community">
                                            @endif
                                        </div>
                                        <span>{{ $community->community_name }}</span>
                                    </a>
                                @endforeach
                            @endif --}}

                            @if ($createdCommunities->isNotEmpty())
                                @foreach ($createdCommunities as $community)
                                    <a href="{{ route('show.mycommunity', ['community_name' => $community->community_name]) }}" class="sidebar__link">
                                        <div class="profile-img1">
                                            @if (!empty($community->community_pic))
                                                <img src="{{ asset('storage/' . $community->community_pic) }}" alt="{{ $community->community_name }}">
                                            @else
                                                <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Community">
                                            @endif
                                        </div>
                                        <span>{{ $community->community_name }}</span>
                                    </a>
                                @endforeach
                            @endif
                            
                        </div>
                    </div>



                    {{-- @php
                        $otherCommunities = App\Models\Communities::where('user_id', '!=', session('user_id'))->get();
                    @endphp


                    @if ($otherCommunities->isNotEmpty())
                        <div>
                            <h3 class="sidebar__title">OTHER COMMUNITIES</h3>
                            <div class="sidebar__list">
                                @foreach ($otherCommunities as $community)
                                    <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}" class="sidebar__link">
                                        <div class="profile-img1">
                                            @if (!empty($community->community_pic))
                                                <img src="{{ asset('storage/' . $community->community_pic) }}" alt="{{ $community->community_name }}">
                                            @else
                                                <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Community">
                                            @endif
                                        </div>
                                        <span>{{ $community->community_name }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif --}}

                    @if ($joinedCommunities->isNotEmpty())
                        <div>
                            <h3 class="sidebar__title">OTHER COMMUNITIES</h3>
                            <div class="sidebar__list">
                                @foreach ($joinedCommunities as $community)
                                    <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}" class="sidebar__link">
                                        <div class="profile-img1">
                                            @if (!empty($community->community_pic))
                                                <img src="{{ asset('storage/' . $community->community_pic) }}" alt="{{ $community->community_name }}">
                                            @else
                                                <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Default Community">
                                            @endif
                                        </div>
                                        <span>{{ $community->community_name }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>

                <div class="sidebar__actions">
                    <button>
                        <i class="ri-moon-clear-fill sidebar__link sidebar__theme" id="theme-button">
                        <span>Theme</span>
                        </i>
                    </button>

                    {{-- <button class="sidebar__link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Log Out</span>
                    </button> --}}

                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="sidebar__link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Log Out</span>
                        </button>
                    </form>

                </div>
            </div>
        </nav>
   
        <main class="main container" id="main">

            <div class="all-element-main">

                {{-- <form action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
                    @csrf
    
                    <div class="all-element-main-img">

                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <div class="main-img-profile-img">
                            <input type="file" name="profile_pic" id="main-img-profile-img" style="display: none;" accept="image/*">
                            <label class="main-img-profile-img-lable" for="main-img-profile-img">
                                <span id="upload-label">Profile Picture</span>
                                <svg rpl="" fill="currentColor" height="16" icon-name="upload-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m10.513 5.63 3.929 3.928-.884.884-2.933-2.933V19h-1.25V7.51l-2.933 2.932-.884-.884L9.67 5.446l.589-.029.254.212Zm5.859-1.482A6.876 6.876 0 0 0 10 0a6.876 6.876 0 0 0-6.372 4.148A4.639 4.639 0 0 0 0 8.625a4.716 4.716 0 0 0 4.792 4.625V12A3.465 3.465 0 0 1 1.25 8.625 3.412 3.412 0 0 1 4.189 5.31l.364-.06.123-.35A5.607 5.607 0 0 1 10 1.25a5.607 5.607 0 0 1 5.324 3.65l.123.348.364.06a3.412 3.412 0 0 1 2.939 3.317A3.465 3.465 0 0 1 15.208 12v1.25A4.716 4.716 0 0 0 20 8.625a4.639 4.639 0 0 0-3.628-4.477Z"></path>
                                </svg>
                            </label>
                            <div id="image-preview-profile">
                                @if($user->profile_pic)
                                    <img src="{{ asset('storage/'.$user->profile_pic) }}" alt="Profile Picture" style="width: 158px; cursor: pointer;">
                                @endif
                            </div>
                        </div> 

                        <div class="main-img-cover-img">
                            <input type="file" name="cover_img" id="main-img-cover-img" style="display: none;" accept="image/*">
                            <label class="main-img-cover-img-lable" for="main-img-cover-img">
                                <span id="upload-label">Cover Picture</span>
                                <svg rpl="" fill="currentColor" height="16" icon-name="upload-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m10.513 5.63 3.929 3.928-.884.884-2.933-2.933V19h-1.25V7.51l-2.933 2.932-.884-.884L9.67 5.446l.589-.029.254.212Zm5.859-1.482A6.876 6.876 0 0 0 10 0a6.876 6.876 0 0 0-6.372 4.148A4.639 4.639 0 0 0 0 8.625a4.716 4.716 0 0 0 4.792 4.625V12A3.465 3.465 0 0 1 1.25 8.625 3.412 3.412 0 0 1 4.189 5.31l.364-.06.123-.35A5.607 5.607 0 0 1 10 1.25a5.607 5.607 0 0 1 5.324 3.65l.123.348.364.06a3.412 3.412 0 0 1 2.939 3.317A3.465 3.465 0 0 1 15.208 12v1.25A4.716 4.716 0 0 0 20 8.625a4.639 4.639 0 0 0-3.628-4.477Z"></path>
                                </svg>
                            </label>
                            <div id="image-preview-cover">
                                @if($user->cover_img)
                                    <img src="{{ asset('storage/'.$user->cover_img) }}" alt="Cover Picture" style="width: 516px; cursor: pointer;">
                                @endif
                            </div>
                        </div>
                    </div>
    
                    <div>
                        <label for="email_address">Email Address :</label>
                        <input type="email" name="email" class="main-form-input" id="email_address" placeholder="Email Addrerss" value="{{ $user->email }}">
                    </div>
    
                    <div>
                        <label for="phone_no">Phone Number :</label>
                        <input type="number" name="phone" class="main-form-input" id="phone_no" placeholder="Phone Number" value="{{ $user->phone }}" oninput="validatePhone(this)">
                    </div>
    
                    <div class="main-input-gender">
                        <span style="color: hsl(228, 8%, 56%);">Gender : </span>

                        <div class="main-input-gender-radio">
                            <div>
                                <input type="radio" name="gender" id="male" value="M" {{ $user->gender === 'M' ? 'checked' : '' }}>
                                <label for="male">Male</label>
                            </div>
                            <div>
                                <input type="radio" name="gender" id="female" value="F" {{ $user->gender === 'F' ? 'checked' : '' }}>
                                <label for="female">Female</label>
                            </div>
                            <div>
                                <input type="radio" name="gender" id="others" value="O" {{ $user->gender === 'O' ? 'checked' : '' }}>
                                <label for="others">Others</label>
                            </div>
                        </div>
                    </div>
    
                    <div>
                        <label for="date_of_birth">Date of Birth :</label>
                        <input type="date" name="dob" class="main-form-input" id="date_of_birth" style="padding-right: 7px;" max="{{ date('Y-m-d') }}" class="" value="{{ old('dob', $user->DOB) }}">
                    </div>
    
                    <div>
                        <label for="display_name">Display Name :</label>
                        <input type="text" name="display_name" class="main-form-input" id="" placeholder="Display Name" value="{{ old('display_name', $user->name) }}">
                    </div>
    
                    <div>
                        <label for="main_username">Username :</label>
                        <input type="text" name="username" class="main-form-input" id="" placeholder="Username" value="{{ $user->user_name }}">
                    </div>

                    <div>
                        <label for="bio">Bio :</label>
                        <input type="text" name="bio" class="main-form-input" id="" placeholder="Bio" value="{{ old('bio', $user->bio) }}">
                    </div>

                    <div>
                        <label for="password">New Password :</label>
                        <input type="password" name="password" class="main-form-input" id="password" placeholder="Change your password">
                    </div>
                    <div>
                        <label for="password_confirmation">Confirm Password :</label>
                        <input type="password" name="password_confirmation" class="main-form-input" id="password_confirmation" placeholder="Confirm your new password">
                    </div>
                    
    
                    <button type="submit" class="main-submit-button">Save</button>
                </form> --}}

                @if(isset($post))
                    <div class="create-post-header">
                        <h3>Edit Post</h3>
                    </div>
                    <form action="{{ route('update.post', $post->post_id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                    
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    
                        <div class="form-one">
                            <label for="create-post-title">Title<span class="required-star">*</span></label> <br>
                            <input type="text" name="post_caption" id="create-post-title" class="create-post-title" value="{{ old('post_caption', $post->post_caption) }}" required>
                        </div>
                        <div class="form-two">
                            <textarea name="post_desc" id="post-desc"  class="create-post-body" placeholder="Body">{{ old('post_desc', $post->post_desc) }}</textarea>
                        </div>
                        <div class="all-element-main-img">
                            <div class="main-img-cover-img">
                                <input type="file" name="cover_img" id="main-img-cover-img" style="display: none;" accept="image/*">
                                <label class="main-img-cover-img-lable" for="main-img-cover-img" style="height: 24.7rem;">
                                    <span id="upload-label">Add Picture</span>
                                </label>
                                <div id="image-preview-cover-two" style="top: 413px; height:23.7rem;">
                                    @if($post->post_img)
                                        <img src="{{ asset('storage/'.$post->post_img) }}" alt="Cover Picture" style="width: 516px; height: 23.7rem; cursor: pointer;">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-four">
                            <button class="form-four-button" type="submit">Update</button>
                        </div>
                    </form>

                    
                    <div class="post-wall" id="post-wall-2">
                        <div class="username">
                    
                            <div class="profile-img2">
                                @if($user->profile_pic)
                                    <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                                @else
                                    <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                @endif
                            </div>
                    
                            <div class="profile-img2"></div>
                            <span class="username-hover">{{ session('user')->user_name }}</span>

                            @if($post->community_id) 
                                @php
                                    $community = \App\Models\Communities::find($post->community_id);
                                @endphp
                                @if($community && $community->user_id == session('user_id'))
                                    <a href="{{ route('show.mycommunity', ['community_name' => $community->community_name]) }}">
                                        <span class="username-hover"> | {{ $community->community_name }}</span>
                                    </a>
                                @else
                                    <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                                        <span class="username-hover"> | {{ $community ? $community->community_name : 'Unknown Community' }}</span>
                                    </a>
                                @endif
                            @endif
                        </div>
                        
                        <h3 class="post-wall-first-h3 post-title-display">This is a title</h3>
                    
                    
                            <div class="post-img hidden" style="position: relative; display: inline-block; overflow: hidden;">
                                <img id="post-img" src="{{ asset('storage/' . $post->post_img) }}" alt="Post Image"style="position: relative; z-index: 2;">
                            </div>
                    
                        
                    </div> 

                    
                    <div class="post-wall" id="post-wall-3" style="top: 316px;">
                        <div class="username">
                    
                            <div class="profile-img2">
                                @if($user->profile_pic)
                                    <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                                @else
                                    <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                @endif
                            </div>
                    
                            <div class="profile-img2"></div>
                            <span class="username-hover">{{ session('user')->user_name }}</span>

                            @if($post->community_id) 
                                @php
                                    $community = \App\Models\Communities::find($post->community_id);
                                @endphp
                                @if($community && $community->user_id == session('user_id'))
                                    <a href="{{ route('show.mycommunity', ['community_name' => $community->community_name]) }}">
                                        <span class="username-hover"> | {{ $community->community_name }}</span>
                                    </a>
                                @else
                                    <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                                        <span class="username-hover"> | {{ $community ? $community->community_name : 'Unknown Community' }}</span>
                                    </a>
                                @endif
                            @endif
                            
                        </div>
                        
                        <h3 class="post-wall-first-h3 post-title-display">This is a title</h3>
                    
                        <p class="post-para" id="post-para">Ok so I am 30 years old. Turned 30 back in March and I bought myself a PS5 after my 4 shit out finally after 12 years. I was excited about all the big games but was pleasantly entertained with Astro Bot. So clever! My kids would watch me play before bed and they just loved it. Never thought a sequel would come out. Finally got to try the new one and I am BLOWN AWAY at how absolutely creative and visually appealing this game is. I felt like I was a kid playing an all time classic for the first time. It’s bringing me so much joy! Don’t have many gamers in my life. So I figured I would write this just to share how great I thought it is. Anyone else feel the same?</p>
                        
                    </div> 
                             
                    <div class="post-wall" id="post-wall-1" style=" top:341px;">
                        <div class="username">
                    
                            <div class="profile-img2">
                                @if($user->profile_pic)
                                    <img src="{{ asset('storage/' . $user->profile_pic) }}" alt="Profile Picture">
                                @else
                                    <img src="https://plus.unsplash.com/premium_photo-1701090939615-1794bbac5c06?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                @endif
                            </div>
                    
                            <div class="profile-img2"></div>
                            <span class="username-hover">{{ session('user')->user_name }}</span>

                            @if($post->community_id) 
                                @php
                                    $community = \App\Models\Communities::find($post->community_id);
                                @endphp
                                @if($community && $community->user_id == session('user_id'))
                                    <a href="{{ route('show.mycommunity', ['community_name' => $community->community_name]) }}">
                                        <span class="username-hover"> | {{ $community->community_name }}</span>
                                    </a>
                                @else
                                    <a href="{{ route('show.community', ['community_name' => $community->community_name]) }}">
                                        <span class="username-hover"> | {{ $community ? $community->community_name : 'Unknown Community' }}</span>
                                    </a>
                                @endif
                            @endif
                            
                        </div>
                        
                        <h3 class="post-wall-first-h3 post-title-display" style="margin-bottom: 17px; margin-right: 8px;">This is a title</h3>
                    
                        
                    </div> 
                    


                @else
                    <form action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
                        @csrf
        
                        <div class="all-element-main-img">

                            @if($errors->any())
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="main-img-profile-img">
                                <input type="file" name="profile_pic" id="main-img-profile-img" style="display: none;" accept="image/*">
                                <label class="main-img-profile-img-lable" for="main-img-profile-img">
                                    <span id="upload-label">Profile Picture</span>
                                    <svg rpl="" fill="currentColor" height="16" icon-name="upload-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m10.513 5.63 3.929 3.928-.884.884-2.933-2.933V19h-1.25V7.51l-2.933 2.932-.884-.884L9.67 5.446l.589-.029.254.212Zm5.859-1.482A6.876 6.876 0 0 0 10 0a6.876 6.876 0 0 0-6.372 4.148A4.639 4.639 0 0 0 0 8.625a4.716 4.716 0 0 0 4.792 4.625V12A3.465 3.465 0 0 1 1.25 8.625 3.412 3.412 0 0 1 4.189 5.31l.364-.06.123-.35A5.607 5.607 0 0 1 10 1.25a5.607 5.607 0 0 1 5.324 3.65l.123.348.364.06a3.412 3.412 0 0 1 2.939 3.317A3.465 3.465 0 0 1 15.208 12v1.25A4.716 4.716 0 0 0 20 8.625a4.639 4.639 0 0 0-3.628-4.477Z"></path>
                                    </svg>
                                </label>
                                <div id="image-preview-profile">
                                    @if($user->profile_pic)
                                        <img src="{{ asset('storage/'.$user->profile_pic) }}" alt="Profile Picture" style="width: 158px; cursor: pointer;">
                                    @endif
                                </div>
                            </div> 

                            <div class="main-img-cover-img">
                                <input type="file" name="cover_img" id="main-img-cover-img" style="display: none;" accept="image/*">
                                <label class="main-img-cover-img-lable" for="main-img-cover-img">
                                    <span id="upload-label">Cover Picture</span>
                                    <svg rpl="" fill="currentColor" height="16" icon-name="upload-outline" viewBox="0 0 20 20" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m10.513 5.63 3.929 3.928-.884.884-2.933-2.933V19h-1.25V7.51l-2.933 2.932-.884-.884L9.67 5.446l.589-.029.254.212Zm5.859-1.482A6.876 6.876 0 0 0 10 0a6.876 6.876 0 0 0-6.372 4.148A4.639 4.639 0 0 0 0 8.625a4.716 4.716 0 0 0 4.792 4.625V12A3.465 3.465 0 0 1 1.25 8.625 3.412 3.412 0 0 1 4.189 5.31l.364-.06.123-.35A5.607 5.607 0 0 1 10 1.25a5.607 5.607 0 0 1 5.324 3.65l.123.348.364.06a3.412 3.412 0 0 1 2.939 3.317A3.465 3.465 0 0 1 15.208 12v1.25A4.716 4.716 0 0 0 20 8.625a4.639 4.639 0 0 0-3.628-4.477Z"></path>
                                    </svg>
                                </label>
                                <div id="image-preview-cover">
                                    @if($user->cover_img)
                                        <img src="{{ asset('storage/'.$user->cover_img) }}" alt="Cover Picture" style="width: 516px; cursor: pointer;">
                                    @endif
                                </div>
                            </div>
                        </div>
        
                        <div>
                            <label for="email_address">Email Address :</label>
                            <input type="email" name="email" class="main-form-input" id="email_address" placeholder="Email Addrerss" value="{{ $user->email }}">
                        </div>
        
                        <div>
                            <label for="phone_no">Phone Number :</label>
                            <input type="number" name="phone" class="main-form-input" id="phone_no" placeholder="Phone Number" value="{{ $user->phone }}" oninput="validatePhone(this)">
                        </div>
        
                        <div class="main-input-gender">
                            <span style="color: hsl(228, 8%, 56%);">Gender : </span>

                            <div class="main-input-gender-radio">
                                <div>
                                    <input type="radio" name="gender" id="male" value="M" {{ $user->gender === 'M' ? 'checked' : '' }}>
                                    <label for="male">Male</label>
                                </div>
                                <div>
                                    <input type="radio" name="gender" id="female" value="F" {{ $user->gender === 'F' ? 'checked' : '' }}>
                                    <label for="female">Female</label>
                                </div>
                                <div>
                                    <input type="radio" name="gender" id="others" value="O" {{ $user->gender === 'O' ? 'checked' : '' }}>
                                    <label for="others">Others</label>
                                </div>
                            </div>
                        </div>
        
                        <div>
                            <label for="date_of_birth">Date of Birth :</label>
                            <input type="date" name="dob" class="main-form-input" id="date_of_birth" style="padding-right: 7px;" max="{{ date('Y-m-d') }}" class="" value="{{ old('dob', $user->DOB) }}">
                        </div>
        
                        <div>
                            <label for="display_name">Display Name :</label>
                            <input type="text" name="display_name" class="main-form-input" id="" placeholder="Display Name" value="{{ old('display_name', $user->name) }}">
                        </div>
        
                        <div>
                            <label for="main_username">Username :</label>
                            <input type="text" name="username" class="main-form-input" id="" placeholder="Username" value="{{ $user->user_name }}">
                        </div>

                        <div>
                            <label for="bio">Bio :</label>
                            <input type="text" name="bio" class="main-form-input" id="" placeholder="Bio" value="{{ old('bio', $user->bio) }}">
                        </div>

                        <div>
                            <label for="password">New Password :</label>
                            <input type="password" name="password" class="main-form-input" id="password" placeholder="Change your password">
                        </div>
                        <div>
                            <label for="password_confirmation">Confirm Password :</label>
                            <input type="password" name="password_confirmation" class="main-form-input" id="password_confirmation" placeholder="Confirm your new password">
                        </div>
                        
        
                        <button type="submit" class="main-submit-button">Save</button>
                    </form>
                @endif
                


            </div>


        </main>



        <script src="{{asset('js/editprofile.js')}}"></script>
    </body>
</html> 