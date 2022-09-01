<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <div class="row">
                <div class="col-3 p-5">
                    <img src="/IMG/Logo.png" style="height:100px;" alt="">
                </div>
                <div class="col-9">
                    <div><h1>CodingElite</h1></div>
                    <div class="flex px-10">
                        <div class="pr-5"><strong>30</strong> Posts</div>
                        <div class="pr-5"><strong>20k</strong> Followers</div>
                        <div class="pr-5"><strong>500</strong> Following</div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-app-layout>



<!-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>

    </div>
</div>  -->
