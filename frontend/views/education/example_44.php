<?php

/** @var yii\web\View $this */

$this->title = 'Дочерние узлы';
?>
<h1><?= $this->title; ?></h1>
<style>
    #d1 {
        border: 2px solid navy;
        height: 150px;
        margin: 20px;
        padding: 15px;
        width: 400px;
    }
    #d2 {
        border: 1px dashed navy;
        /*float: right;*/
        /*height: 140px;*/
        /*overflow: auto;*/
        /*padding: 5px;*/
        /*width: 200px;*/
    }
</style>

<div id="d1">

    <h1>Header</h1>
    <p>paragraph<br><span>Span</span></p>
    <button onclick="getStructure()">Get structure</button>
</div>
<div id="d2"></div>
<script>
    function getStructure(){
        var c=document.documentElement.childNodes;
        var msg="";
        for(let i=0; i<c.length; ++i) {
            let d = c[i];
            msg += (+i + 1) + ". " + d.tagName + " (" +
                d.nodeName + ")<br>";
            if (d.hasChildNodes()) {
                let e = d.childNodes;
                for (let j = 0; j < e.length; ++j) {
                    let f = e[j];
                    msg += " &nbsp; " + (+j + 1) + ". " + f.tagName + " (" + f.nodeName + ")<br>";
                }
                window.d2.innerHTML = msg;
            }
        }
    }
</script>
