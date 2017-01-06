
/*====================================================*/
/* FILE /sedlex/inline_scripts/f15cd56e37dc1fb909eab0ed41e17dd1a3ee70b0.js*/
/*====================================================*/

					function UserWebStat_sC(name,value,days) {
						if (days) {
							var date = new Date();
							date.setTime(date.getTime()+(days*24*60*60*1000));
							var expires = "; expires="+date.toGMTString();
						}
						else var expires = "";
						document.cookie = name+"="+value+expires+"; path=/";
					}
			
					function UserWebStat_gC(name) {
						var nameEQ = name + "=";
						var ca = document.cookie.split(';');
						for(var i=0; i < ca.length;i++) {
							var c = ca[i];
							while (c.charAt(0)==' ') c = c.substring(1,c.length);
							if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
						}
						return null;
					}
					
					function whatChoiceForLocalCookies() {
						var choix = UserWebStat_gC("whatChoiceForLocalCookies") ; 
						if (choix==null) {
							return "NO_CHOICE" ; 
						}
						return choix ; 
					}
					
					function acceptLocalCookies() {
						UserWebStat_sC("whatChoiceForLocalCookies","ACCEPT_COOKIE",30) ; 
						jQuery('#infoLocalCookies').remove() ;
						
						jQuery(".traffic_cookies_allow").hide() ; 
						jQuery(".traffic_cookies_refuse").show() ; 
						
					}
					function refusLocalCookies() {
						UserWebStat_sC("whatChoiceForLocalCookies","REFUS_COOKIE",30) ; 
						jQuery('#infoLocalCookies').remove() ;
						UserWebStat_sC('sC', null) ; 
						UserWebStat_sC('rN', null) ; 
						
						jQuery(".traffic_cookies_allow").show() ; 
						jQuery(".traffic_cookies_refuse").hide() ; 
					}
					
					jQuery(function() {
						// On gere les boutons 
						if (whatChoiceForLocalCookies()=="REFUS_COOKIE") {
							jQuery(".traffic_cookies_allow").show() ; 
							jQuery(".traffic_cookies_refuse").hide() ; 
						} else if (whatChoiceForLocalCookies()=="ACCEPT_COOKIE") {
							jQuery(".traffic_cookies_allow").hide() ; 
							jQuery(".traffic_cookies_refuse").show() ; 
						} else {
							jQuery(".traffic_cookies_allow").show() ; 
							jQuery(".traffic_cookies_refuse").show() ; 						
						}
					}) ; 

					function UserWebStat() {
										
												
							if (UserWebStat_gC('sC')!=null) {
								var sC = UserWebStat_gC('sC') ; 
							} else {
								var sC = "" ; 
							}
							if (UserWebStat_gC('rN')!=null) {
								var rN = UserWebStat_gC('rN') ; 
							} else {
								var rN = 0 ; 
							}
						
							var arguments = {
								action: 'UserWebStat', 
								browserName : navigator.appName, 
								browserVersion : navigator.appVersion, 
								platform : navigator.platform, 
								browserUserAgent: navigator.userAgent,
								cookieEnabled: navigator.cookieEnabled,
								singleCookie: sC,
								refreshNumber: rN,
								referer : document.referrer,
								page: window.location.pathname
							} 
						
							var ajaxurl2 = "http://gavellawdenver.com/wp-admin/admin-ajax.php" ; 
							jQuery.post(ajaxurl2, arguments, function(response) {
								//We put the return values in cookie and we relaunch
								if (response+""=="0") {
									UserWebStat_sC('rN', 0) ; 
								} else {
									var val = (response+"").split(",") ; 
									if (val.length==2) {
										UserWebStat_sC('sC', val[0], 365) ; 
										UserWebStat_sC('rN', val[1]) ;
										// if the browser does not accept cookie, we do not iterate
										if (UserWebStat_gC('rN')+""==val[1]+"") {
											var t=setTimeout("UserWebStat()",10000);
										}
									}
								}
							});    
						
											}
					
										
						// We launch the callback when jQuery is loaded or at least when the page is loaded
						if (typeof(jQuery) == 'function') {
							UserWebStat() ; 			
						} else { 
							if (window.attachEvent) {window.attachEvent('onload', UserWebStat);}
							else if (window.addEventListener) {window.addEventListener('load', UserWebStat, false);}
							else {document.addEventListener('load', UserWebStat, false);} 
						}
					
																
					
