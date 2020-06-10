<footer>
    <div class="top-footer">
        <div id="text-news">
            <h2>عضویت در خبر نامه</h2>

        </div>
        <div id="btn-news">
            <div class="input-group-prepend" >
                    <span class="input-group-text purple lighten-3" id="basic-text1">
                        <button class="btn-srch" style="width: 90px">ثبت نام</button>
                    </span>
            </div>
        </div>
        <div id="text-news">
            <input class="form-control my-0 py-1" type="text" placeholder="ایمیل خود را وارد کنید"
                   aria-label="Search">
        </div>
        <div id="social">
            <button class="btn-social">
                <img src="" alt="">
            </button>
            <button class="btn-social">
                <img src="" alt="">
            </button>
        </div>
    </div>
    <div>
        <div class="foo" id="foo-c1">
            <strong>نمادهای ما</strong>
        </div>
        <div class="foo" id="foo-c2">

        </div>
        <div class="foo" id="foo-c3">
            <strong>اطلاعات ما</strong>
        </div>
        <div class="foo" id="foo-c4">
            <strong>دسترسی سریع</strong>
        </div>
        <div class="foo" id="foo-c5">
            <strong>ارتباط با ما</strong>
        </div>
    </div>



</footer>
<?php wp_footer(); ?>
<script>
filterSelection("all")
function filterSelection(c) {
var x, i;
x = document.getElementsByClassName("filterDiv");
if (c == "all") c = "";
for (i = 0; i < x.length; i++) {
w3RemoveClass(x[i], "show");
if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
}
}

function w3AddClass(element, name) {
var i, arr1, arr2;
arr1 = element.className.split(" ");
arr2 = name.split(" ");
for (i = 0; i < arr2.length; i++) {
if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
}
}

function w3RemoveClass(element, name) {
var i, arr1, arr2;
arr1 = element.className.split(" ");
arr2 = name.split(" ");
for (i = 0; i < arr2.length; i++) {
while (arr1.indexOf(arr2[i]) > -1) {
arr1.splice(arr1.indexOf(arr2[i]), 1);
}
}
element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
btns[i].addEventListener("click", function(){
var current = document.getElementsByClassName("active");
current[0].className = current[0].className.replace(" active", "");
this.className += " active";
});
}
$(".carousel .item").first().addClass("active");
$(".list-group-item").first().addClass("active");

</script>
</body>
</html>
