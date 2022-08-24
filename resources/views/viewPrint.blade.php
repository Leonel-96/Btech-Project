<!DOCTYPE html>
<html>
    <head>
        <title>View Print</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        {{-- <script src="{{asset('js/jquery.printPage.js')}}"></script> --}}
        <script src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>
    </head>
    <body>
        <a href="{{URL::to('printPreview')}}" class="btnPrint">Print</a>
        <script type="text/javascript">
        $(document).ready(function(){
            $('.btnPrint').printPage();
        });
        </script>
    </body>
</html>