<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
</head>

<body>

    <a-assets>
        <img id="MySky" crossorigin  src="https://images.unsplash.com/photo-1470756544705-1848092fbe5f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1378&q=80">
      </a-assets>

    <a-scene>
      <a-sky src="#MySky"></a-sky>
       </a-sphere>
    </a-scene>
</body>

</html>
