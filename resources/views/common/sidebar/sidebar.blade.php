@if (!Auth::guest())
    <div class="w3-sidebar w3-bar-block w3-border-right" id="mySidebar">
        @can('tourist')
            <a href="{{url('/tour/')}}" class="w3-bar-item w3-button">Tours</a>
            <a href="{{url('/tourist/my-tours')}}" class="w3-bar-item w3-button">My Tours</a>
            <a href="{{url('tourist/profile')}}" class="w3-bar-item w3-button">My Profiles</a>
        @endcan
        @can('tour-operator')
            <a href="{{url('/tour-operator/profile/')}}" class="w3-bar-item w3-button">Profiles</a>
            <a href="{{url('/tour/')}}" class="w3-bar-item w3-button">Tours Management</a>
            <a href="{{url('/tour/create')}}" class="w3-bar-item w3-button">Create Tour</a>
            <a href="#" class="w3-bar-item w3-button">Tours analysis</a>
        @endcan
        @can('admin')
            <a href="{{url('/tour/')}}" class="w3-bar-item w3-button">Tours Management</a>
            <a href="{{route('tourist.index')}}" class="w3-bar-item w3-button">Tourist Management</a>
            <a href="{{route('tour-operator.index')}}" class="w3-bar-item w3-button">Tour Operator Management</a>
        @endcan
    </div>
@endif
