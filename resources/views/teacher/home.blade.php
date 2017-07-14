<!-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        进入了teacher/home
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection -->

<!DOCTYPE html>
<html>
<head>
    <title>Hello Qunee for HTML5</title>
    <meta charset="utf-8">
</head>
<body>
<div style="height: 500px;" id="canvas"/>
 <script src="{{ asset('./js/qunee.min.js') }}"></script>
<script>
    var graph = new Q.Graph('canvas');

    var hello = graph.createNode("Hello", -100, -50);
    hello.image = Q.Graphs.server;
    var qunee = graph.createNode("Qunee", 100, 50);
    var edge = graph.createEdge("Hello\nQunee", hello, qunee);
    edge.setStyle(Q.Styles.LABEL_OFFSET_Y, -10);
    edge.setStyle(Q.Styles.LABEL_POSITION, Q.Position.CENTER_TOP);
    edge.setStyle(Q.Styles.LABEL_ANCHOR_POSITION, Q.Position.CENTER_BOTTOM);
    edge.setStyle(Q.Styles.LABEL_BORDER, 1);
    edge.setStyle(Q.Styles.LABEL_POINTER, true);
    edge.setStyle(Q.Styles.LABEL_PADDING, new Q.Insets(2, 5));
    edge.setStyle(Q.Styles.LABEL_BACKGROUND_GRADIENT,
            Q.Gradient.LINEAR_GRADIENT_VERTICAL);
</script>
</body>
</html>