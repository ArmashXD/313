<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      <img src="../img/logo313.png" class="img" style="height: 50px; width:60%;"/>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Home') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'ticket' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('ticket.index') }}">
                <i class="material-icons">report_problem</i>
                <p>{{ __('Ticket') }}</p>
            </a>
        </li>
        
        <li class="nav-item {{ ($activePage == 'token' || $activePage == 'donation') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#token" aria-expanded="true">
                  <i class="material-icons">toll</i>
                  <p>{{ __('Tokens') }}
                        <b class="token"></b>
                    </p>
                </a>
                <div class="collapse show" id="token">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'purchase_token' ? ' active' : '' }}">
                            <a class="nav-link" href="{{route('token.index')}}">
                                <i class="material-icons"></i>
                                <p>{{ __('Purchase Tokens') }}</p>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'purchased_tokens' ? ' active' : '' }}">
                            <a class="nav-link" href="{{route('token.create')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> {{ __('My Available tokens') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'assigned_token' ? ' active' : '' }}">
                            <a class="nav-link" href="{{route('token.assigned')}}">
                                <span class="sidebar-mini"></span>
                                <span class="sidebar-normal"> {{ __('Assigned tokens') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
      @if(!Auth::user()->license_paid == false && !Auth::user()->child->c_id_1 == null)

      <li class="nav-item {{ ($activePage == 'token' || $activePage == 'donation') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#donation" aria-expanded="true">
          <i class="material-icons">send</i>
          <p>{{ __('Donations') }}
            <b class="build"></b>
          </p>
        </a>
        <div class="collapse show" id="donation">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'Donations_sent' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('donation.sent')}}">
                  <i class="material-icons"></i>
                    <p>{{ __('Donation To Send') }}</p>
                </a>
              </li>
            <li class="nav-item{{ $activePage == 'Received' ? ' active' : '' }}">
                  <a class="nav-link" href="{{route('donation.mark-received')}}">
                      <span class="sidebar-mini"></span>
                      <span class="sidebar-normal"> {{ __('Donation To Mark Received') }} </span>
                  </a>
            </li>
            <li class="nav-item{{ $activePage == 'donations_received' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('donation.received')}}">
                <span class="sidebar-mini"></span>
                <span class="sidebar-normal"> {{ __('Donation Received') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'Donations' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('donation.index')}}">
                <span class="sidebar-mini"></span>
                <span class="sidebar-normal"> {{ __('Donation send') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      {{--  --}}
      <li class="nav-item{{ $activePage == 'money' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('money.index')}}">
            <i class="material-icons">money</i>
              <p>{{ __('My Money') }}</p>
          </a>
        </li>
        <li class="nav-item {{ ($activePage == 'token' || $activePage == 'wheelhouse') ? ' active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#wheelhouse" aria-expanded="true">
            <i class="fa fa-wheelchair"></i>
            <p>{{ __('My Wheelhouses') }}
              <b class="wheel"></b>
            </p>
          </a>
          <div class="collapse show" id="wheelhouse">
            <ul class="nav">
              <li class="nav-item{{ $activePage == 'wheelhouse' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('wheelhouse.index')}}">
                  <span class="sidebar-mini"> OW</span>
                  <span class="sidebar-normal">{{ __('Open Wheel-House') }} </span>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'c_wheelhouse' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('wheelhouse.index')}}">
                  <span class="sidebar-mini"> CW </span>
                  <span class="sidebar-normal"> {{ __('Closed Wheel-House') }} </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
            <li class="nav-item{{ $activePage == 'myteam' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('team.index')}}">
                    <i class="material-icons">group</i>
                    <p>{{ __('My Team') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'User Profile' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('profile.edit')}}">
                    <i class="material-icons">account_circle</i>
                    <p>{{ __('My Profile') }}</p>
                </a>
            </li>

        @endif
      {{--
     <li class="nav-item {{ ($activePage == 'donations' || $activePage == 'donations') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#donations" aria-expanded="true">
          <i class="fa fa-tint"></i>
          <p>{{ __('Donations') }}
            <b class="wheel"></b>
          </p>
        </a>
        <div class="collapse show" id="donations">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'donationtosend' ? ' active' : '' }}">
              <a class="nav-link" href="/donation_to_send">
                <span class="sidebar-mini"> ds</span>
                <span class="sidebar-normal">{{ __('Donations to send ') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'donationtomark' ? ' active' : '' }}">
              <a class="nav-link" href="/donation_to_mark_recieved">
                <span class="sidebar-mini">dm</span>
                <span class="sidebar-normal"> {{ __('Donations to mark recieved') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'donationrecieved' ? ' active' : '' }}">
              <a class="nav-link" href="/donation_to_mark_recieved">
                <span class="sidebar-mini"> CW </span>
                <span class="sidebar-normal"> {{ __('Donations recieved') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'makeaonetimedonation' ? ' active' : '' }}">
              <a class="nav-link" href="/one_time_donation">
                <span class="sidebar-mini"> MD </span>
                <span class="sidebar-normal"> {{ __('Make A one Time Donation') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'one-time-donation' ? ' active' : '' }}">
              <a class="nav-link" href="/one_time_donation">
                <span class="sidebar-mini"> OD </span>
                <span class="sidebar-normal"> {{ __('One Time Donation Recieved') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#myMoney" aria-expanded="true">
          <i class="fa fa-dollar"></i>
          <p>My Money
            <b class="money"></b>
          </p>
        </a>
        <div class="collapse show" id="myMoney">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'money' ? ' active' : '' }}">
              <a class="nav-link" href="/my_money">
                <i class="material-icons">DC</i>
                <p>Donate To A Campaigns</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'money' ? ' active' : '' }}">
              <a class="nav-link" href="/my_money">
                <i class="material-icons">RM</i>
                  <p>Methods To Recieve A Money</p>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'marketing' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Marketing Tools') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#myprofile" aria-expanded="true">
          <i class="fa fa-user"></i>
          <p>{{ __('My Profile') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="myprofile">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#help" aria-expanded="true">
          <i class="fa fa-question-circle"></i>
          <p>{{ __('Help') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="help">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('icons') }}">
                <i class="material-icons">bubble_chart</i>
                <p>{{ __('FAQ') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('map') }}">
                <i class="material-icons">location_ons</i>
                  <p>{{ __('Contact Us') }}</p>
              </a>
            </li>
          </ul>
        </div>
      </li> --}}
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">
          <i class="material-icons">clear</i>
          <p>{{ __('logout') }}</p>
        </a>
      </li> --}}
    </ul>
  </div>
</div>
