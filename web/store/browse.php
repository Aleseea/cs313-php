<?php
session_start();
//session_destroy();

//if session not set then set to an empty string
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Shopping | Browse</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <header>
            <h1>Men's Clothing Shop</h1>
            <nav>
                <ul>
                    <li><a href="view_cart.php">View Cart</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="totalItem">
                <div class="inline">
                    <h2>Hat</h2>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALsSURBVGhD7ZhPaBNBFMajoh5ED179g4Ii9CBCkt1VEQ0muyMxs4000FoabBRbrKikofXQGCNYcwhaWqmKXnsQFT15U6wHLx6LCF6kXgUPoiiiju9tRtZkJ22z3WyCzA8+CLsz7/tmJruPJCCRSCQSicRjFEI2aAaNqgY9p+i0oOjmhGLQO5bwM1zDe2FiHt5H6Xo+rT1QSHIzBLwEAedUnf5SDZMtSdZYmGOYeS0e38TL+Y8SS2yHII9hET8dIRsU1oATewSft/HyPlAorFR1cxj0tTaQB/oCm5NFD+7WHDpSqTV850QhPBM8Uw/Ri9t6TOUknoiMm6QH4LqiYu4himGOCMyaKjj9HLf3hmD06FZYyDeRWVMFz2FIN7fwGMsHik45THwSPC+TPMbyIISshSP+LDLxQ+D9KRg8vZrHcQ+84yMiA591iMdxTysecoegb/E47oHv6LSwuL+a4nHcA512RlDYZ9EZHsc9ciGeSi7ERi7EU3mwkMxo8e358UnWSmEGHmdxND2xA3rGU+jkL6AJXgvHzD14fXCs9P7ixD3WSmEGzIKZIGMJTmkWs2JmvF4F3HxefZzWkc51DV74kC3dFBr4IfTGDNDd3zjzmc94fBu4OF8zyBbpZEd6T7H+kcssV74lNPRSufJt8CpanugtzFTRPI9vo+r0pWCgQ3tJ0jJID+et3RIFcSOslc7mrdroIfJ2SKeveHwbOLpx4eCFBLsVOdbLzMxZ1pcdY0NXymz0xl1h0H+FY3AszsG5keTxxXa+nq7z+DYKoR1w43fNwIalQaCDnT3M6MmweHqAJU6csRTvG2BGd791D8eI5jYqLZbYz+NXA2+s+6IJbarXPLYTTe/aCAPqP/RtI/rjb3uoS8igu6CPvBMXaL3gp+93ldBuHndhdsdi62BSEV4AH2sLtViz4SgN8ZhLJ5VKrYLTOQBddAi7Pf5aBFX+XfdH0/CKvaoQ86Qaje/ksSQSiUQikfznBAJ/ANSR3nalMAmfAAAAAElFTkSuQmCC">
                </div>
                <a href="add_to_cart.php?item=hat">Add Hat to Cart</a>
            </div>
            
            <div class="totalItem">
                <div class="inline">
                    <h2>Shirt</h2>
                    <img src="data:image/png;base64,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">
                </div>
                <a href="add_to_cart.php?item=shirt">Add Shirt to Cart</a>
            </div>
            
            <div class="totalItem">
                <div class="inline">    
                    <h2>Pants</h2>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKwSURBVFhH7ZfLa1NBFMYHd/4Bbl27d++yuBJ03a17tUna1GqkWNE8a9QobfO4edimiY1NDG1MWisuLBTEYlWwUjcuRUN8IKIc7xdm4CYeu9BkRsWBH3yc+5tzP5pFUvHPnIDbot2oTR+hu9OH2yBzjhO5tnfHuXyt8qrjZQDF6G2mDXL38+47cm3vjnP5H1uw+yW1wjOKnplvzxuJo+1iABkzPIPjvKN2yLW9O2q5k4XEBsX91R/mCjyD0z3XUnC1vEOx8Vt0J7fZMXeCZ3DgOud9L7hS2qaZS1VKhmodL+aAAxd31KxvBZfyWzR77T5dPj1H6ck6rXX9ZVhsBy7u4C529KVg2JulK76C/bIGLc1t8WV2AXdwFzuwS67t3XF+xL9L3z5i7mW/wv+CP+P6+cUW4J45MVJwZfElBTzpLwCZcxRGCtaKzyk8nH0DkDlHYaRg9eYTiozmtgEy5yiMFCynH1F4NLcOkDlHYaRgcWadIt7cbYDMOQojBfM3HlBoJBMDyJyjMFIwHV39GnCnxgAy5yiMFEwElj/6XdZxgMw5CiMFpybKzYDHOgaQOUdhpODVc8V3gaHUIYDMOQojBSfHZlvBU8kDAJlzFEYK2t8gnya88X0AmXMU2gveq+xQ0GV98/l8ewAyZpwLtBesL7ygkCfzXqoCGTPOBdoLLuefUngk91qqAhkzzgXaC1Yyj/E9vClVgYwZ5wLtBUvJDRRsSBUFG5hxLtBesDD10P6hkM1KVSBjxrlAe0H8v+t3WxekKpAx41ygvaAVqX+2v4NPSFUgY8a5QHvBuL/a8rtSg1K1C6YGMeNcoL1gbLzUtEsNSBUFBzDjXKC9YPTsfDM4lDooVYGMGecC7QXtn/kfLg5b+6UqkDHjXNC3grsROpnfK1WBzDlOpPq3HyG+A7sXy5ksCIMBAAAAAElFTkSuQmCC">
                </div>
                <a href="add_to_cart.php?item=pants">Add Pants to Cart</a>
            </div>
            
            <div class="totalItem">
                <div class="inline">
                    <h2>Shoes</h2>
                    <img src="data:image/png;base64,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">
                </div>
                <a href="add_to_cart.php?item=shoes">Add Shoes to Cart</a>
            </div>
            
            <div class="totalItem">
                <div class="inline">
                    <h2>Socks</h2>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAATGSURBVFhH7VdLbxNXFJ5WVaVuu20XVVdVl11USF248XjGNhGOCLKDUCTAhASIgIg0CATIjRPnScKGVX8DEuqym9JN/EqhxUnVKoTQ1LSpEsfxeDIxuCS359zcm8xMb5IJxiNRcaRPM76v8/m87hnptZCULJNawY6qj6CCZ7duUUX43O87PtlR9RGzIrtyJ+/4ZEfVR8yK7MqdvOOTHVUfQQW1gh1VH0EF3CovgzcERQRXBgaJMXrTMlYZHyfFgQGyNjZmGXeFoD4ysqVQGxomi71xsgQwTGSQHI4X+vopWRyrAFwhiIqNm2OUKL5zLCEZIFkaHLSML/cnKMnlRMI9gkvxPgsJjr3GXSMoUu5k3HWCPPa04c1Y5FhmscdjkcMVguXh7dgzZy+PPR6LNDEw9iAGcRyfrhBExdrQkCWbOVYSA5BAgpIDCYJP1wi+LN4Q/N8TzASD1ayqFrKBwN2k19uR9no/BcZvseNrl1oJIrT+fvLnpUvk19ZWY/LgQT2tqnomEPg+5fN1A+nP73k87zB1+xck+OTsWTJz8iSZPXWK/N7ZSQrXrtEMFZFxAh3K00JPD5mJRiu5SETPKMqzjN+fTSlKL+j7MnngwHtM/d6CBO8fOkRy4TDFj42NNK6ywSCZB7JrthKzX/DmYzH2Ncl3f/Vi+ujRctLnq04Gg9MZVR1PNzSou4aEyMXosrn2dgIHkJ+amuhv+xqnwI4HOyB+EeA71tXCjRvoufUHTU3lrN//CEOBUbKKiCCHDtda7sgRMhkIkFI8LlzjBKujo1sEEWhV8zyEwwYYw4AQaGW0tmU3ggh0Mbr+QSgE1+CocM1uwAYXbyMzQbzv7Y1vqa+PQJwa4HIvo7YpQPDFXgmxCtcgxiS6XTQvAp5p7yM5qJttHTtiCZITEmrZkkRQEopluFfti+3IX7hAY9KALkc0bwfe7XZi2K7p0JiI1nPkWlqwTLUzepIEAfrdQne3cLEZ6F74d+QvB2sRaEHsgszknJSuvy9fJlD07zF6kgQpH3nY3KyJFtsBJYL8dvy4cE4EfcSaHGUH1kdvgqeKjJ4kYZUHk85jJok2mPEoGiVTLS3CuZ1QNCUIJsdeVkRPpRVljdHbFKxBkEGrxVhMuIljrqODPDx8WDhnx2aS/DcO8ZNWtJ4DExJCSWPUtiUty41Qh4z8xYvrO/3LmRMnqJtFcxxYmLHOib5fcAy7d9E+DjQSGGuW0bLKhKp+kvb7J/HCf3z6dHXx6lX6j/hmtN5sW5vlQDtoctjI4W/MaidJMn/u3DrE4G1GSSzg8s/AzAmofRnoSAwsoFORiHY/FNp4cuYMvWFEh3Ns3b8MZcGnxE6AXkBPKsoXjIozSXk8HwHRZgjeQSgBSYwR6AHXpsLhEsTlP1gazLWUWtFcYuDdifWgk6pCmzbB1NYmYOUPUg0NobTPF4fO5AcsDYAKlKzS47a26sKVKxYrapAwIlIUQD5//nwV9i+mPZ4PmYpXL0lVfX/C55Mh4Xqg0/4WQuMPwPNfjh3T5zo7n+e7ukjh+nWyCi7HG2mlt5c87eragI5Ggwvj56wsf8yOck+mw+F3MaYnZDmaVZRvIERyYPUK1jog9RRceifl9QZJLPY22/K6iCT9C4+VWVGsvfQlAAAAAElFTkSuQmCC">
                </div>
                <a href="add_to_cart.php?item=socks">Add Socks to Cart</a>
            </div>
        </main>
    </body>
</html>