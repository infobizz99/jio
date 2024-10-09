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
    <link href="/assets/css/custom.css" rel="stylesheet" />

    <script>
      function validateAndRedirect() {
          const mobileInput = document.getElementById("mobile");
          const errorMessage = document.getElementById("error-message");
          const mobileNumber = mobileInput.value;

          if (mobileNumber.length === 10 && !isNaN(mobileNumber)) {
              errorMessage.style.display = "none";
              localStorage.setItem("mobileNumber", mobileNumber);
              window.location.href = "recharge";
          } else {
              errorMessage.style.display = "block";
          }
      }
  </script>
      <style>
        .error-message {
            color: red;
            display: none;
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
      <div class="bg-slate-100">
        <img
          src="/assets/images/b1.png"
          alt=""
          class="w-full"
        />
        <div class="py-10 px-5">
          <div class="bg-white border border-slate-200 rounded-2xl py-4 px-6">
            <div
              class="text-[#0a2885] flex items-center text-[18px] font-bold w-fit mx-auto"
            >
              <svg
                stroke="currentColor"
                fill="currentColor"
                stroke-width="0"
                viewBox="0 0 24 24"
                height="30"
                width="30"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M6 2H18C18.5523 2 19 2.44772 19 3V21C19 21.5523 18.5523 22 18 22H6C5.44772 22 5 21.5523 5 21V3C5 2.44772 5.44772 2 6 2ZM12 17C11.4477 17 11 17.4477 11 18C11 18.5523 11.4477 19 12 19C12.5523 19 13 18.5523 13 18C13 17.4477 12.5523 17 12 17Z"
                ></path></svg
              ><span>Mobile Recharge</span>
            </div>
            <div class="mt-8">
              <label class="text-[14px] ml-2 font-semibold"
                >Jio Mobile Number</label>
                <input type="text" id="mobile" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');"
                class="bg-white mt-1 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <p id="error-message" class="error-message">Please enter a valid mobile number!</p>
            </div>
            <div class="bg-slate-100 flex items-center p-2 rounded-xl mt-5">
              <svg
                stroke="currentColor"
                fill="currentColor"
                stroke-width="0"
                viewBox="0 0 24 24"
                class="text-yellow-500 mr-2"
                height="40"
                width="40"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="m20.749 12 1.104-1.908a1 1 0 0 0-.365-1.366l-1.91-1.104v-2.2a1 1 0 0 0-1-1h-2.199l-1.103-1.909a1.008 1.008 0 0 0-.607-.466.993.993 0 0 0-.759.1L12 3.251l-1.91-1.105a1 1 0 0 0-1.366.366L7.62 4.422H5.421a1 1 0 0 0-1 1v2.199l-1.91 1.104a.998.998 0 0 0-.365 1.367L3.25 12l-1.104 1.908a1.004 1.004 0 0 0 .364 1.367l1.91 1.104v2.199a1 1 0 0 0 1 1h2.2l1.104 1.91a1.01 1.01 0 0 0 .866.5c.174 0 .347-.046.501-.135l1.908-1.104 1.91 1.104a1.001 1.001 0 0 0 1.366-.365l1.103-1.91h2.199a1 1 0 0 0 1-1v-2.199l1.91-1.104a1 1 0 0 0 .365-1.367L20.749 12zM9.499 6.99a1.5 1.5 0 1 1-.001 3.001 1.5 1.5 0 0 1 .001-3.001zm.3 9.6-1.6-1.199 6-8 1.6 1.199-6 8zm4.7.4a1.5 1.5 0 1 1 .001-3.001 1.5 1.5 0 0 1-.001 3.001z"
                ></path>
              </svg>
              <p class="text-[12px] font-semibold">
                Recharge with a ₹149 plan for a month full of digital delights.
              </p>
            </div>
            <div class="mt-5">
              <button
                class="bg-[#0a2885] py-4 w-full text-[16px] rounded-full font-bold text-white"
                onclick="validateAndRedirect()"
              >
                Recharge
              </button>
            </div>
          </div>
        </div>
        <img
          src="/assets/images/footer.png"
          alt=""
          class="w-full"
        />
      </div>
    </div>
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
    <script src="https://img1.wsimg.com/traffic-assets/js/tccl.min.js"></script>
  </body>
</html>
