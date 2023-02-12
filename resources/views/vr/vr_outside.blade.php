<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<link rel= “manifest” href= “manifest.json” />
<script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
</head>

<body>

    <a-assets>
        <img id="MySky" crossorigin  src="{{asset('assets/uploads/logo/outside.jpg')}}">
      </a-assets>

    <a-scene>
      <a-sky src="#MySky"></a-sky>
       </a-sphere>
    </a-scene>
</body>

</html>
