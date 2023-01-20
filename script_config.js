let btn=document.getElementsByTagName("button")[0];
                        let d=document.getElementById("map");
                        let la="";
let ln="";
let a=document.getElementsByTagName("a")[1];
a.href="delaccper.php?un="+document.cookie.split("=")[1];
function f(){
        axios.get("https://ipinfo.io/")
                .then(function(res0){
                        la=res0.data.loc.split(",")[0];
                        ln=res0.data.loc.split(",")[1];
                        console.log(la+" "+ln);
                        console.log(res0.data);
                        function fm(){
                                var m={
                                        center:new google.maps.LatLng(la,ln),
                                        zoom:10,
                                        mapTypeId:google.maps.MapTypeId.HYBRID
                                };
                                var mp=new google.maps.Map(d,m);
                                var mrkr=new google.maps.Marker({
                                        position:new google.maps.LatLng(la,ln),
                                       icon:{
                                                scale:6,
                                                strokeColor:"gray",
                                                strokeWeight:2
                                        }});
                                        mrkr.setMap(mp);
                                google.maps.event.addListener(mrkr,"click",function(){
                                        mp.setZoom(15);
                                        mp.setCenter(mrkr.getPosition());
                                });
                                var iw=new google.maps.InfoWindow({
                                        content:"Information about this place"
                                });
                                google.maps.event.addListener(mrkr,"click",function(){
                                        iw.open(mp,mrkr);
                                });
                        }
                        fm();
                })
                .catch(function(error){
                        console.log(error);
                })
                }
btn.addEventListener("click",function(){
        f();
        console.log(la+" "+ln);
},false);
