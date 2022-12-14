@if (Auth::user() && Auth::user()->can('tourist'))
    <footer class="w-full pt-2" style="background-color: #63b0eb;">

        <!-- Images container -->

        <div class="grid grid-cols-6 gap-6 w-[80%] mx-auto mb-2 p-6 bg-white rounded-lg">
            <div class="">
                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp" class="w-52" />
                <a href="#!">
                    <div class="" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
            </div>
            <div class="">
                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/111.webp" class="w-52" />
                <a href="#!">
                    <div class="" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
            </div>
            <div class="">
                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/112.webp" class="w-52" />
                <a href="#!">
                    <div class="" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
            </div>
            <div class="">
                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/114.webp" class="w-52" />
                <a href="#!">
                    <div class="" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
            </div>
            <div class="">
                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/115.webp" class="w-52" />
                <a href="#!">
                    <div class="" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
            </div>
            <div class="">
                <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/116.webp" class="w-52" />
                <a href="#!">
                    <div class="" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                </a>
            </div>
        </div>
        <!-- Images container -->

        <!-- Copyright -->
        <div class="text-white text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            ?? 2022 Copyright:
            <a class="text-white" href="https://github.com/tgp97-ha/otb_system">OBTSystem.com</a>
        </div>
        <!-- Copyright -->
        
    </footer>
@endif
