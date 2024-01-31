<div class="input-icons">
    <i class="bi bi-download" onclick="file_download();" title="Download"></i>
    <i class="bi bi-eraser"></i>
    <i class="bi bi-copy"></i>
</div>

<style>
    .form-fields {
        position: relative;
    }

    .input-icons {
        position: absolute;
        right: 0px;
        bottom: 16px;
        display: flex;
        justify-content: end;
        align-items: center;
        gap: 7px;
    }

    .input-icons i {
        background-color: var(--blue);
        width: 20px;
        height: 20px;
        padding: 7px;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        color: #fff;
    }

    .input-icons ul {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 10px;
    }
</style>