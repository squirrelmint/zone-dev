<style>
    .modal-edit {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999999;
        /* display: none; */
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
        outline: 0;
    }
    .modal-back-drop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999995;
        width: 100vw;
        height: 100vh;
        background: -webkit-linear-gradient(#FFFFFF,#000000);
        opacity: 0;
    }
    .modal-back-drop.show {
        opacity: 1;
    }

    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999995;
        width: 100vw;
        height: 100vh;
        background:#000000;
        opacity: 0;
    }
    .modal-overlay.show {
        opacity: 0.8;
    }
</style>
<div id="myModalLoad">
    <div class="modal-edit" data-backdrop="static" data-keyboard="false">
        <div class="d-flex justify-content-center" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #6EEAA6 !important;">
            <div class="spinner-border" role="status" style="width: 10rem; height: 10rem; font-size: 5rem;">
                <span class="sr-only"></span>
            </div>
        </div>
    </div>
</div>
<div class="modal-back-drop show">
</div>

<div class="modal-overlay">
</div>
