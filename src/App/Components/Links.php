<div class="top-left">
    <div class="vertical-line"></div>
    <br>
    <div class="icon-container">
        <i class="fa fa-github color-white icon" data-url="https://github.com/TanishqMehrunkarIIPSDAVV"></i>
    </div>
    <br>
    <div class="icon-container">
        <i class="fi fi-brands-discord color-white icon"
        data-url="http://discordapp.com/users/779206329813696522">
        </i>
    </div>
    <br>
    <div class="icon-container">
        <i class="fa fa-linkedin-square color-white icon"
        data-url="https://www.linkedin.com/in/tanishq-mehrunkar-388b7b204/">
        </i>
    </div>
</div>
<script>
    document.querySelector(".top-left").addEventListener("click",(e)=>
    {
        if(e.target.classList.contains('icon'))
        {
            const link=e.target.dataset.url;
            window.open(link,"_blank");
        }
    });
</script>