<!DOCTYPE html>

<html lang="en">
    <head>

        @include('template.dosen.head')

    </head>
    <body>
                @include('template.dosen.header')
                @include('template.dosen.nav')

                    @yield('content')
                @include('template.dosen.footer')
                @include('template.dosen.script')

                </div> <!-- content -->

            </div>

        </div>
    </body>

</html>