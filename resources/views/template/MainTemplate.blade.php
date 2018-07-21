<!DOCTYPE html>

<html lang="en">
    <head>

        @include('template.potongan.head')

    </head>
    <body>
                @include('template.potongan.header')
                @include('template.potongan.nav')

                    @yield('content')
                @include('template.potongan.footer')
                @include('template.potongan.script')

                </div> <!-- content -->

            </div>

        </div>
    </body>

</html>