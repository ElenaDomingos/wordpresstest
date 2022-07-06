<?php

get_header(); ?>


    <section class="py-20">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6 mb-10 mb-lg-0">
              <div class="mw-lg-md">
                <span class="badge bg-secondary">Недвижимость</span>
                <h3 class="my-6">Дома и квартиры в Москве и Подмосковье</h3>
                <p class="mw-lg-sm lead lh-lg text-muted">Только самые выгодные предложения продажи домов и квартир.</p>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="row">
                <div class="col-12 col-md-6 mb-10">
                  <span>
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14 40H40" stroke="#006251" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M8 40V34L34 8L40 14L14 40H8Z" stroke="#006251" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M34 20L28 14" stroke="#006251" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </span>
                  <h6 class="mt-8 mb-4 fw-normal">Регистрируйтесь</h6>
                  <p class="lead lh-lg text-muted">И получите доступ ко всем объектам</p>
                </div>
                <div class="col-12 col-md-6 mb-10">
                  <span>
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 14L24 6L40 14V34L24 42L8 34V14Z" stroke="#006251" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M30 18L18 30" stroke="#006251" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M18 18L30 30" stroke="#006251" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </span>
                  <h6 class="mt-8 mb-4 fw-normal">Каталог</h6>
                  <p class="lead lh-lg text-muted">Вы можете совершить поиск по каталогу онлайн</p>
                </div>
                <div class="col-12 col-md-6 mb-10 mb-lg-0">
                  <span>
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M24 44C24 44 40 36 40 24V10L24 4L8 10V24C8 36 24 44 24 44Z" stroke="#006251" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M16 23L22 29L34 17" stroke="#006251" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </span>
                  <h6 class="mt-8 mb-4 fw-normal">Безопасность</h6>
                  <p class="lead lh-lg text-muted">Наш ресурс гарантирует вам безопасность сделки</p>
                </div>
                <div class="col-12 col-md-6">
                  <span>
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M24 30C27.866 30 31 26.866 31 23C31 19.134 27.866 16 24 16C20.134 16 17 19.134 17 23C17 26.866 20.134 30 24 30Z" stroke="#006251" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M42 23.9999C42.006 28.6858 40.1784 33.1881 36.908 36.5439C35.2324 38.2727 33.2261 39.6466 31.0086 40.5839C28.791 41.5213 26.4075 42.0028 24 41.9999C21.5925 42.0028 19.209 41.5213 16.9914 40.5839C14.7739 39.6466 12.7676 38.2727 11.092 36.5439C9.03644 34.4289 7.53208 31.8412 6.71122 29.0085C5.89036 26.1757 5.77815 23.1846 6.38447 20.2982C6.99079 17.4119 8.29705 14.7188 10.1884 12.4557C12.0797 10.1927 14.4981 8.42905 17.2309 7.31994C19.9638 6.21082 22.9273 5.79021 25.8608 6.0951C28.7943 6.39999 31.608 7.42105 34.0543 9.06846C36.5006 10.7159 38.5047 12.9392 39.8902 15.5428C41.2757 18.1464 42.0002 21.0506 42 23.9999V23.9999Z" stroke="#006251" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M11.092 36.544C12.5768 34.5144 14.5197 32.8639 16.7626 31.7268C19.0056 30.5897 21.4853 29.9981 24 30C26.5147 29.9981 28.9944 30.5897 31.2374 31.7268C33.4803 32.8639 35.4232 34.5144 36.908 36.544" stroke="#006251" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </span>
                  <h6 class="mt-8 mb-4 fw-normal">Проверенно</h6>
                  <p class="lead lh-lg text-muted">У нас только проверенные пользователи и объекты</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
<section class="py-20">
        <div class="container">
    
          <div class="row">
            <?php
          
            $query = new WP_Query(array(
           'post_type' =>  'rental',
           'orderby' => 'date',
           'order' => 'ASC',
           'posts_per_page' => 5,
           'tax_query' => array ( 
            array ( 
            'taxonomy' => 'rental-type',
            'field' => 'slug',
            'terms' => 'house',
        ))

    ));
 
if($query->have_posts()){
        echo '<h6 class="mt-8 mb-4 fw-normal">Частные дома</h6>';
    }
  
            while ($query->have_posts()) : $query->the_post();
      setup_postdata($post);
            ?>
            <div class="col-12 col-md-6 col-lg-4 mb-12">
              <span class="text-muted" style="font-size: 12px;"><?php echo get_the_date(); ?></span>
              <h6 class="mt-4 mb-4"><?php echo get_the_title(); ?></h6>
              <?php
              if (has_post_thumbnail()) {
          echo '<a  class="mb-4" href="' . get_post_permalink() . '"><img src="' . get_the_post_thumbnail_url() . '" class="img-thumbnail img-fluid" ></a>';
        }
        
        
        	if(get_field('area')) {
			    echo '<h2 class="mb-2 lead lh-lg text-muted">Площадь: ' . get_field('area') . ' км<sup>2</sup></h2>';
			}
			
			if(get_field('price')) {
			    echo '<h2 class="mb-2 lead lh-lg text-muted">Цена: ' . number_format(get_field('price'), 0, ',', ' ') . ' ₽</h2>';
			}
			
			if(get_field('floor')) {
			    echo '<h2 class="mb-2 lead lh-lg text-muted">Этаж(ей): ' . get_field('floor') . ' </h2>';
			} 
			?>
              <a class="link-primary fw-bold text-decoration-none" href="<?php echo get_post_permalink(); ?>">Подробнее</a>
            </div>
            
            <?php
            endwhile;
            wp_reset_postdata();
 
  ?>
  
          </div>
          
          
          <div class="row">
            <?php
            
            $query = new WP_Query(array(
           'post_type' =>  'rental',
           'orderby' => 'date',
           'order' => 'ASC',
           'posts_per_page' => 5,
           'tax_query' => array (
               array (
            'taxonomy' => 'rental-type',
            'field' => 'slug',
            'terms' => 'apartment',
        ))

    ));

   
    
    if($query->have_posts()){
        echo ' <h6 class="mt-8 mb-4 fw-normal">Квартиры</h6>';
    }
            while ($query->have_posts()) : $query->the_post();
      setup_postdata($post);
            ?>
            
            <div class="col-12 col-md-6 col-lg-4 mb-12">
              <span class="text-muted" style="font-size: 12px;"><?php echo get_the_date(); ?></span>
              <h6 class="mt-4 mb-4"><?php echo get_the_title(); ?></h6>
              <?php
              if (has_post_thumbnail()) {
          echo '<a  class="mb-4" href="' . get_post_permalink() . '"><img src="' . get_the_post_thumbnail_url() . '" class="img-thumbnail img-fluid" ></a>';
        }
        
        
        	if(get_field('area')) {
			    echo '<h2 class="mb-2 lead lh-lg text-muted">Площадь: ' . get_field('area') . ' км<sup>2</sup></h2>';
			}
			
			if(get_field('price')) {
			    echo '<h2 class="mb-2 lead lh-lg text-muted">Цена: ' . number_format(get_field('price'), 0, ',', ' ')  . ' ₽</h2>';
			}
			
			if(get_field('floor')) {
			    echo '<h2 class="mb-2 lead lh-lg text-muted">Этаж(ей): ' . get_field('floor') . ' </h2>';
			} 
			?>
              <a class="link-primary fw-bold text-decoration-none" href="<?php echo get_post_permalink(); ?>">Подробнее</a>
            </div>
            
            <?php
            endwhile;
            wp_reset_postdata();
 
  ?>
  
          </div>
          
               <div class="row">
            <?php
            
            $query = new WP_Query(array(
           'post_type' =>  'rental',
           'orderby' => 'date',
           'order' => 'ASC',
           'posts_per_page' => 5,
           'tax_query' => array (
               array (
            'taxonomy' => 'rental-type',
            'field' => 'slug',
            'terms' => 'office',
        ))

    ));

   
    
    if($query->have_posts()){
        echo ' <h6 class="mt-8 mb-4 fw-normal">Офисы</h6>';
    }
            while ($query->have_posts()) : $query->the_post();
      setup_postdata($post);
            ?>
            
            <div class="col-12 col-md-6 col-lg-4 mb-12">
              <span class="text-muted" style="font-size: 12px;"><?php echo get_the_date(); ?></span>
              <h6 class="mt-4 mb-4"><?php echo get_the_title(); ?></h6>
              <?php
              if (has_post_thumbnail()) {
          echo '<a  class="mb-4 " href="' . get_post_permalink() . '"><img src="' . get_the_post_thumbnail_url() . '" class="img-thumbnail img-fluid" ></a>';
        }
        
        
        	if(get_field('area')) {
			    echo '<h2 class="mb-2 lead lh-lg text-muted">Площадь: ' . get_field('area') . ' км<sup>2</sup></h2>';
			}
			
			if(get_field('price')) {
			    echo '<h2 class="mb-2 lead lh-lg text-muted">Цена: ' . number_format(get_field('price'), 0, ',', ' ')  . ' ₽</h2>';
			}
			
			if(get_field('floor')) {
			    echo '<h2 class="mb-2 lead lh-lg text-muted">Этаж(ей): ' . get_field('floor') . ' </h2>';
			} 
			?>
              <a class="link-primary fw-bold text-decoration-none" href="<?php echo get_post_permalink(); ?>">Подробнее</a>
            </div>
            
            <?php
            endwhile;
            wp_reset_postdata();
 
  ?>
  
          </div>
        </div>
      </section>
      
          <section class="py-20">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-lg-6 mb-10 mb-lg-0 position-relative">
              <img class="d-none d-lg-block position-absolute top-0 start-0 ms-n3" style="width: 296px; height: 296px;" src="cronos-assets/elements/dark-green-dark-warning-right.svg" alt="">
              <div class="d-flex flex-column mx-auto" style="width: 296px;">
                <img class="ms-auto" style="width: 148px; height: 148px;" src="cronos-assets/elements/grey-square.svg" alt="">
                <div class="d-flex justify-content-end align-items-end">
                  <img class="d-none d-lg-block" style="width: 148px; height: 148px;" src="cronos-assets/elements/grey-square.svg" alt="">
                  <img class="ms-auto img-fluid" style="width: 296px; height: 296px; object-fit: cover;" src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=890&amp;q=80" alt="">
                </div>
                <div class="d-flex justify-content-end">
                  <img style="width: 148px; height: 148px;" src="cronos-assets/elements/grey-square.svg" alt="">
                  <img class="img-fluid" style="height: 148px; width: 148px; object-fit: cover;" src="https://images.unsplash.com/photo-1600275669439-14e40452d20b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80" alt="">
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="mw-lg-sm mx-auto">
                <h2 class="mb-6">Покупайте и берите в аренду</h2>
                <p class="lead lh-lg text-muted mb-6">У нас вы найдете лучшие варианты недвижимости.</p>
               
              </div>
            </div>
          </div>
        </div>
      </section>
      
      

<?php

get_footer(); 

?>