@if(!Auth::check())
                        <li>{{-- HTML::clever_link('register','Register')-- }}</li>
                            <li>{{ --HTML::clever_link('login','Login')--}}</li>
                            @else
                            @if($isAdmin)
                                    <li>{{ --HTML::clever_link('settings','Einstellungen')-- }}</li>
                            @endif
                                <li>{{-- HTML::clever_link('logout','Logout') --}}</li>
                        @endif