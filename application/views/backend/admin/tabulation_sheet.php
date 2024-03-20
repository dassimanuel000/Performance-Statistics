<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title"><?php echo get_phrase('tabulation_sheet'); ?></h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><?php echo get_phrase('admin'); ?></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo get_phrase('tabulation_sheet'); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box"> 
                        <div class="col-md-12">
                            <label for=""><br></label> 
                            <div class="card-box col-md-10">
                            <input type="text" class="form-control lonf" id="search" name="search" value="" placeholder="Écrivez votre recherche"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                <table class="table responsive">
                                    <tbody id="tbody">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<script type="text/javascript">
    const search = document.getElementById('search');
    const tableBody = document.getElementById('tbody');
    
    function getContent() {
        const searchValue = search.value;
        const xhr = new XMLHttpRequest();
        xhr.open('GET', '<?php echo base_url(); ?>admin/search_student?search=' + searchValue, true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                tableBody.innerHTML = xhr.responseText;
            }
        }
        xhr.send()
    }
    search.addEventListener('input', getContent);
</script>