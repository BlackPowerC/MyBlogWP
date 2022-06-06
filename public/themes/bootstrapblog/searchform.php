<div class="search-area">
    <div class="search-area-inner d-flex align-items-center justify-content-center">
        <div class="close-btn"><i class="icon-close"></i></div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <form action="<?php esc_url(home_url('/')) ?>">
                    <div class="form-group">
                        <input id="search"
                               type="search"
                               name="s"
                               placeholder="What are you looking for?"
                               value="<?php get_search_query(true) ; ?>">
                        <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>