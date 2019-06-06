<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="manifest" href="manifest.json">
    <script type="text/javascript" src="pwatest.js"></script>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('http://192.168.1.100/pwa/sw.js')
            .then((reg) => {
              console.log('Service worker registered.', reg);
            }).catch(e=>{
              console.log(e);
            });
      });
      }
    </script>
  </head>
  <body onload="getData()">
    <h1>Welcome!!</h1>
    <div class="" id="users">

    </div>
  </body>
</html>
