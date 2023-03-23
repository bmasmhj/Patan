<?php require "modal/header.php" ?>
<style>
.terminal {
    background : black;
  color: lightgreen;
  width: 100%;
  height: 90vh;
  text-shadow: 0px 0px 3px white;
  font-family: monospace;
  font-size: 1.3em;
  overflow-y: scroll;
  padding-right: 1em;
  animation-duration: 0.5s;
  animation-name: colorthing;
  animation-iteration-count: infinite;
  animation-direction: alternate;
}
@keyframes colorthing {
  from {
    color: rgb(0, 255, 0);
  }
  to {
    color: rgb(0, 200, 0);
  }
}

</style>
<div class="row">
    <div class="col-md-2">
<?php require "modal/nav.php" ?>
</div>
<div class="col-md-10 mt-5">
<div class="container">
    <div class="card p-3">
        <h4>No Dashboard</h4>
       <div class="container">
            You will see nothing here because my friends are dumb
            <pre>
             <div class="terminal" id="terminal">
        </div>
</pre>
            <div class='d-md-none d-block'>
                <img src="https://media.giphy.com/media/3o7TKsQ8U1iZ3Nl7Di/giphy.gif" alt="" class="img-fluid">
            </div>
        </div> 
    </div>
</div>

<?php require "modal/footer.php" ?>

<script>
    var code = `
echo "danbulant.eu presents...";
$someVar[0] = "Hacker Typer..";`;
var OLDcode = `
#include <iostream>
#include <string>
#include <WebsiteLoader.h>

using namespace std;

int main() {
    WebsiteLoader loader;
    loader.connectToServer("https"//bimash.com.np/");

    cout << "Accessing server..." << endl;
    loader.sendCommand("access_server");

    cout << "Executing command..." << endl;
    loader.sendCommand("execute_command");

    cout << "Bypassing security..." << endl;
    loader.bypassSecurity();

    cout << "Decrypting files..." << endl;
    loader.decryptFiles();

    cout << "Analyzing data..." << endl;
    loader.analyzeData();

    cout << "Hacking firewall..." << endl;
    loader.hackFirewall();

    cout << "Cracking code..." << endl;
    loader.crackCode();

    cout << "Searching for vulnerabilities..." << endl;
    loader.searchForVulnerabilities();

    cout << "Initiating protocol..." << endl;
    loader.initiateProtocol();

    cout << "Access granted. Loading website..." << endl;
    loader.loadWebsite();

    return 0;
}


`;
var i = 0;
document.addEventListener("keydown", function () {
 
});

const dash = setInterval(() => {
     terminal.innerText += OLDcode.slice(i, i + 5);
  i += 5;
  if (i > OLDcode.length) {
    i = 0;
    clearInterval(dash);
  }
}, 100);

setInterval(function () {
  var term = document.getElementById("terminal");
  term.scrollTop = term.scrollHeight;
}, 100);

</script>