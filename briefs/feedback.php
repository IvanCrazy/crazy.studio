<?php

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : die('error');
$params = isset($_REQUEST['json']) ? json_decode($_REQUEST['json'], true) : array();
$jsonBox = array();
$error = array();
$info = array();
$exemple = array();
$form = array();
$host = $_SERVER['HTTP_HOST'];
$ref = $_SERVER['HTTP_REFERER'];


$form['form-1'] = array(
  'fields' => array(
    'days' => array(
      'title' => 'Каковы планируемые сроки проекта?'
    ),
    'company' => array(
      'title' => 'Полное название компании и адрес сайта (если есть)'
    ),
    'name' => array(
      'title' => 'Имя контактного лица',
      'validate' => array(
        'preg' => '%[A-Z-a-zА-Яа-я\s]%',
        'minlength' => '3',
        'maxlength' => '35',
      ),
      'messages' => array(
        'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
        'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
        'maxlength' => 'Максимальная длинна поля [ %1$s ] превышает допустимую - %2$s',
      )
    ),
    'contacts' => array(
      'title' => 'Контактные данные',
      'validate' => array(
        'minlength' => '3',
        'maxlength' => '35',
      ),
      'messages' => array(
        'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
        'maxlength' => 'Максимальная длинна поля [ %1$s ] превышает допустимую - %2$s',
      )
    ),
    'area' => array(
      'title' => 'Укажите область деятельности компании, какие товары или услуги вы предлагаете?'
    ),
    'competitors' => array(
      'title' => 'Укажите ссылки на сайты ваших прямых или косвенных конкурентов. Оцените их сайты, укажите, что вам на  них нравится, а что нет'
    ),
    'differences' => array(
      'title' => 'Какие есть ключевые отличия от конкурентов, которые надо выделить?'
    ),
    'info-notes' => array(
      'title' => 'Примечания'
    ),
    'is-target' => array(
      'title' => 'Должны ли мы сами определить целевую аудиторию?'
    ),
    'audience' => array(
      'title' => 'Если нет, опишите группы целевой аудитории. Укажите их характерные черты и особенности.'
    ),
    'site-type' => array(
      'title' => 'Укажите, какой тип сайта вам требуется'
    ),
    'site-type-other' => array(
      'title' => 'Другое:'
    ),
    'task' => array(
      'title' => 'Какую задачу вы ставите перед нами?'
    ),
    'user-action' => array(
      'title' => 'Какое ключевое действие должен совершить пользователь на сайте?'
    ),
    'site-sections' => array(
      'title' => 'Укажите основные разделы сайта'
    ),
    'other-language' => array(
      'title' => 'Нужно ли делать другие языковые версии?'
    ),
    'site-content' => array(
      'title' => 'Кто занимается подготовкой контента, нужна ли подготовка изображений?'
    ),
    'logo' => array(
      'title' => 'Есть ли логотип и/или фирменный стиль, которые надо использовать?'
    ),
    'create-logo' => array(
      'title' => 'Если нет, требуется ли их разработка?'
    ),
    'cool-design' => array(
      'title' => 'Укажите адреса сайтов, дизайн которых вам нравится'
    ),
    'shit-design' => array(
      'title' => 'Укажите адреса сайтов, дизайн которых вам НЕ нравится'
    ),
    'design-effect' => array(
      'title' => 'Опишите впечатление, которое должен производить дизайн'
    ),
    'current-style' => array(
      'title' => 'Надо ли придерживаться текущей стилистики сайта (в случае редизайна)?'
    ),
    'design-notes' => array(
      'title' => 'Примечания'
    ),
    'design-additions' => array(
      'title' => 'Что еще мы должны знать?'
    ),
  ),
  'cfg' => array(
    'charset' => 'utf-8',
    'subject' => 'Бриф техзадания для сайта',
    'title' => 'Бриф техзадания для сайта',
    'ajax' => true,
    'validate' => true,
    'from_email' => 'noreply@email.com',
    'from_name' => 'бриф техзадания для сайта',
    'to_email' => 'artem@crazy.studio',
    'to_name' => 'noreply',
    'geoip' => false,
    'referer' => true,
    'type' => 'html',
    'tpl' => true,
    'antispam' => 'email77',
    'antispamjs' => 'address77',
    'okay' => '<b>Отправлено!</b><br>Спасибо, что заполнили наш бриф!<br>Менеджер свяжется с вами в ближайшее время.',
    'fuck' => 'ПРОИЗОШЛА ОШИБКА',
    'spam' => 'Cпам робот',
    'notify' => 'color-modal-textbox',
    'usepresuf' => false
  )
);

// FORM-2
$form['form-2'] = array(
  'fields' => array(
    'days' => array(
      'title' => 'Каковы планируемые сроки проекта?'
    ),
    'company' => array(
      'title' => 'Полное название компании и адрес сайта (если есть)'
    ),
    'name' => array(
      'title' => 'Имя контактного лица',
      'validate' => array(
        'preg' => '%[A-Z-a-zА-Яа-я\s]%',
        'minlength' => '3',
        'maxlength' => '35',
      ),
      'messages' => array(
        'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
        'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
        'maxlength' => 'Максимальная длинна поля [ %1$s ] превышает допустимую - %2$s',
      )
    ),
    'contacts' => array(
      'title' => 'Контактные данные',
      'validate' => array(
        'minlength' => '3',
        'maxlength' => '35',
      ),
      'messages' => array(
        'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
        'maxlength' => 'Максимальная длинна поля [ %1$s ] превышает допустимую - %2$s',
      )
    ),
    'area' => array(
      'title' => 'Укажите область деятельности компании, какие товары или услуги вы предлагаете?'
    ),
    'competitors' => array(
      'title' => 'Укажите ссылки на сайты ваших прямых или косвенных конкурентов. Оцените их фирменный стиль, укажите, что вам нравится, а что нет'
    ),
    'differences' => array(
      'title' => 'Какие есть ключевые отличия от конкурентов, которые надо выделить?'
    ),
    'info-notes' => array(
      'title' => 'Примечания'
    ),
    'is-target' => array(
      'title' => 'Должны ли мы сами определить целевую аудиторию?'
    ),
    'audience' => array(
      'title' => 'Если нет, опишите группы целевой аудитории'
    ),
    'task' => array(
      'title' => 'Какую задачу вы ставите перед нами?'
    ),
    'logo' => array(
      'title' => 'Есть ли логотип?'
    ),
    'edit-logo' => array(
      'title' => 'Если есть, нужно ли вносить изменения в логотип?'
    ),
    'link-logo' => array(
      'title' => 'Если есть логотип, вставьте ссылку на него или приложите файл'
    ),
    'identity-products' => array(
      'title' => 'Перечислите на чём будет располагаться ваш фирменный стиль'
    ),
    'content-notes' => array(
      'title' => 'Примечание'
    ),
    'cool-design' => array(
      'title' => 'Укажите примеры фирменных стилей, которые вам нравятся'
    ),
    'shit-design' => array(
      'title' => 'Укажите примеры фирменных стилей, которые вам НЕ нравятся'
    ),
    'design-effect' => array(
      'title' => 'Опишите впечатление, которое должен производить дизайн'
    ),
    'current-style' => array(
      'title' => 'Надо ли придерживаться текущего фирменного стиля (в случае редизайна)?'
    ),
    'design-notes' => array(
      'title' => 'Примечания'
    ),
    'design-additions' => array(
      'title' => 'Что еще мы должны знать?'
    ),
  ),
  'cfg' => array(
    'charset' => 'utf-8',
    'subject' => 'Бриф техзадания для фирменного стиля',
    'title' => 'Бриф техзадания для фирменного стиля',
    'ajax' => true,
    'validate' => true,
    'from_email' => 'noreply@email.com',
    'from_name' => 'бриф техзадания для фирменного стиля',
    'to_email' => 'artem@crazy.studio',
    'to_name' => 'noreply',
    'geoip' => false,
    'referer' => true,
    'type' => 'html',
    'tpl' => true,
    'antispam' => 'email77',
    'antispamjs' => 'address77',
    'okay' => '<b>Отправлено!</b><br>Спасибо, что заполнили наш бриф!<br>Менеджер свяжется с вами в ближайшее время.',
    'fuck' => 'ПРОИЗОШЛА ОШИБКА',
    'spam' => 'Cпам робот',
    'notify' => 'color-modal-textbox',
    'usepresuf' => false
  )
);

// FORM-3
$form['form-3'] = array(
  'fields' => array(
    'days' => array(
      'title' => 'Каковы планируемые сроки проекта?'
    ),
    'company' => array(
      'title' => 'Полное название компании и адрес сайта (если есть)'
    ),
    'name' => array(
      'title' => 'Имя контактного лица',
      'validate' => array(
        'preg' => '%[A-Z-a-zА-Яа-я\s]%',
        'minlength' => '3',
        'maxlength' => '35',
      ),
      'messages' => array(
        'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
        'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
        'maxlength' => 'Максимальная длинна поля [ %1$s ] превышает допустимую - %2$s',
      )
    ),
    'contacts' => array(
      'title' => 'Контактные данные',
      'validate' => array(
        'minlength' => '3',
        'maxlength' => '35',
      ),
      'messages' => array(
        'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
        'maxlength' => 'Максимальная длинна поля [ %1$s ] превышает допустимую - %2$s',
      )
    ),
    'area' => array(
      'title' => 'Укажите область деятельности компании, какие товары или услуги вы предлагаете?'
    ),
    'competitors' => array(
      'title' => 'Укажите ссылки на сайты или прикрепите изображения ваших прямых или косвенных конкурентов. Оцените их логотипы, укажите, что вам нравится, а что нет'
    ),
    'differences' => array(
      'title' => 'Какие есть ключевые отличия от конкурентов, которые надо выделить?'
    ),
    'info-notes' => array(
      'title' => 'Примечания'
    ),
    'is-target' => array(
      'title' => 'Должны ли мы сами определить целевую аудиторию?'
    ),
    'audience' => array(
      'title' => 'Если нет, опишите группы целевой аудитории'
    ),
    'task' => array(
      'title' => 'Какую задачу вы ставите перед нами?'
    ),
    'current-style' => array(
      'title' => 'В случае редизайна, приложите ссылку или прикрепите файлы с логотипом и/или фирменным стилем'
    ),
    'cool-design' => array(
      'title' => 'Укажите примеры дизайна логотипа, которые вам нравятся'
    ),
    'shit-design' => array(
      'title' => 'Укажите примеры дизайна логотипа, которые вам НЕ нравятся'
    ),
    'design-effect' => array(
      'title' => 'Опишите впечатление, которое должен производить дизайн'
    ),
    'design-notes' => array(
      'title' => 'Примечания'
    ),
    'design-additions' => array(
      'title' => 'Что еще мы должны знать?'
    ),
  ),
  'cfg' => array(
    'charset' => 'utf-8',
    'subject' => 'Бриф техзадания для логотипа',
    'title' => 'Бриф техзадания для логотипа',
    'ajax' => true,
    'validate' => true,
    'from_email' => 'noreply@email.com',
    'from_name' => 'бриф техзадания для логотипа',
    'to_email' => 'artem@crazy.studio',
    'to_name' => 'noreply',
    'geoip' => false,
    'referer' => true,
    'type' => 'html',
    'tpl' => true,
    'antispam' => 'email77',
    'antispamjs' => 'address77',
    'okay' => '<b>Отправлено!</b><br>Спасибо, что заполнили наш бриф!<br>Менеджер свяжется с вами в ближайшее время.',
    'fuck' => 'ПРОИЗОШЛА ОШИБКА',
    'spam' => 'Cпам робот',
    'notify' => 'color-modal-textbox',
    'usepresuf' => false
  )
);

// FORM-4
$form['form-4'] = array(
  'fields' => array(
    'days' => array(
      'title' => 'Каковы планируемые сроки проекта?'
    ),
    'company' => array(
      'title' => 'Полное название компании и адрес сайта (если есть)'
    ),
    'name' => array(
      'title' => 'Имя контактного лица',
      'validate' => array(
        'preg' => '%[A-Z-a-zА-Яа-я\s]%',
        'minlength' => '3',
        'maxlength' => '35',
      ),
      'messages' => array(
        'preg' => 'Поле [ %1$s ] возможно содержит ошибку',
        'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
        'maxlength' => 'Максимальная длинна поля [ %1$s ] превышает допустимую - %2$s',
      )
    ),
    'contacts' => array(
      'title' => 'Контактные данные',
      'validate' => array(
        'minlength' => '3',
        'maxlength' => '35',
      ),
      'messages' => array(
        'minlength' => 'Минимальная длинна поля [ %1$s ] меньше допустимой - %2$s',
        'maxlength' => 'Максимальная длинна поля [ %1$s ] превышает допустимую - %2$s',
      )
    ),
    'area' => array(
      'title' => 'Укажите область деятельности компании, какие товары или услуги вы предлагаете?'
    ),
    'competitors' => array(
      'title' => 'Укажите ссылки на сайты ваших прямых или косвенных конкурентов. Оцените их фирменный стиль, укажите, что вам нравится, а что нет'
    ),
    'differences' => array(
      'title' => 'Какие есть ключевые отличия от конкурентов, которые надо выделить?'
    ),
    'info-notes' => array(
      'title' => 'Примечания'
    ),
    'is-target' => array(
      'title' => 'Должны ли мы сами определить целевую аудиторию?'
    ),
    'audience' => array(
      'title' => 'Если нет, опишите группы целевой аудитории'
    ),
    'task' => array(
      'title' => 'Какую задачу вы ставите перед нами?'
    ),
    'task-instance1' => array(
      'title' => 'Укажите что вам требуется'
    ),
    'task-instance2' => array(
      'title' => 'Укажите что вам требуется'
    ),
    'task-instance3' => array(
      'title' => 'Укажите что вам требуется'
    ),
    'task-instance4' => array(
      'title' => 'Укажите что вам требуется'
    ),
    'task-instance5' => array(
      'title' => 'Укажите что вам требуется'
    ),
    'task-instance6' => array(
      'title' => 'Укажите что вам требуется'
    ),
    'catalog-sections' => array(
      'title' => 'Если вы заказываете каталог или буклет, укажите разделы'
    ),
    'content-info' => array(
      'title' => 'Укажите всю информацию, которая должна содержаться в визитке/буклете/афише/другое'
    ),
    'other-language' => array(
      'title' => 'Нужно ли делать другие языковые варианты?'
    ),
    'task-content' => array(
      'title' => 'Кто занимается подготовкой контента, нужна ли подготовка изображений или текста?'
    ),
    'content-notes' => array(
      'title' => 'Примечание'
    ),
    'logo' => array(
      'title' => 'Есть ли логотип и/или фирменный стиль, которые надо использовать?'
    ),
    'create-logo' => array(
      'title' => 'Если нет, требуется ли их разработка?'
    ),
    'link-logo' => array(
      'title' => 'Если есть логотип, вставьте ссылку на него или приложите файл. Если нет логотипа в векторном формате, укажите это'
    ),
    'cool-design' => array(
      'title' => 'Укажите примеры дизайна, которые вам нравятся'
    ),
    'shit-design' => array(
      'title' => 'Укажите примеры дизайна, которые вам НЕ нравятся'
    ),
    'design-effect' => array(
      'title' => 'Опишите впечатление, которое должен производить дизайн'
    ),
    'current-style' => array(
      'title' => 'Надо ли придерживаться текущего дизайна (в случае редизайна)?'
    ),
    'design-notes' => array(
      'title' => 'Примечания'
    ),
    'design-additions' => array(
      'title' => 'Что еще мы должны знать?'
    ),
  ),
  'cfg' => array(
    'charset' => 'utf-8',
    'subject' => 'Бриф техзадания для полиграфии',
    'title' => 'Бриф техзадания для полиграфии',
    'ajax' => true,
    'validate' => true,
    'from_email' => 'noreply@email.com',
    'from_name' => 'бриф техзадания для полиграфии',
    'to_email' => 'artem@crazy.studio',
    'to_name' => 'noreply',
    'geoip' => false,
    'referer' => true,
    'type' => 'html',
    'tpl' => true,
    'antispam' => 'email77',
    'antispamjs' => 'address77',
    'okay' => '<b>Отправлено!</b><br>Спасибо, что заполнили наш бриф!<br>Менеджер свяжется с вами в ближайшее время.',
    'fuck' => 'ПРОИЗОШЛА ОШИБКА',
    'spam' => 'Cпам робот',
    'notify' => 'color-modal-textbox',
    'usepresuf' => false
  )
);


if($act == 'cfg') {
   $jsonBox['configs'] = ExportConfigs($form);
    die(json_encode($jsonBox));
}

function ExportConfigs($form) {
    $need = array('antispam','antispamjs','notify');
    $conf = array();
     foreach($form as $name => $data) {
         foreach($data['cfg'] as $k => $cfg) {
           if(in_array($k, $need)) {
               $conf[$name]['cfg'][$k] = $cfg;
           }
         }
     }

    return $conf;
}


if(isset($form[$act])) {

   $form = $form[$act];
   $getdata = array();
   $sb = array(); // subject и body


      foreach($form['fields'] as $name => $field) {

            $title = (isset($field['title'])) ? $field['title'] : $name;
            $getdata[$name]['title'] = $title;
            $rawdata = isset($_POST[$name]) ? trim($_POST[$name]) : '';

              if(isset($field['validate'])) {              

                  $def = 'Поле с именем [ '.$name.' ] содержит ошибку.';
                  // -0-
                  if(isset($field['validate']['required']) &&
                      empty($rawdata)) {
                      $error[$name] = isset($field['messages']['required']) ? sprintf($field['messages']['required'], $title) :
                                     (isset($messages['validator']['required']) ? sprintf($messages['validator']['required'], $title) : $def);
                  }
                  // -1-
                  if(isset($field['validate']['minlength']) &&
                      mb_strlen($rawdata) < $field['validate']['minlength']) {
                      $error[$name] = isset($field['messages']['minlength']) ? sprintf($field['messages']['minlength'], $title, $field['validate']['minlength']) : $def;
                  }
                  // -2-
                  if(isset($field['validate']['maxlength']) &&
                    mb_strlen($rawdata) > $field['validate']['maxlength']) {
                        $error[$name] = isset($field['messages']['maxlength']) ? sprintf($field['messages']['maxlength'], $title, $field['validate']['maxlength']) : $def;
                  }
                  // -3-
                  if(isset($field['validate']['preg']) && mb_strlen($rawdata) > 0 &&
                      !preg_match($field['validate']['preg'], $rawdata)) {
                      $error[$name] = isset($field['messages']['preg']) ? sprintf($field['messages']['preg'], $title, $field['validate']['preg']) : $def;
                  }
                  // -4-
                  if(isset($field['validate']['substr']) &&
                      mb_strlen($rawdata) > $field['validate']['substr']) {
                      $rawdata = mb_substr($rawdata, 0, $field['validate']['substr']);
                  }

               $outdata = htmlspecialchars($rawdata);

               $getdata[$name]['value'] = $outdata;

              }
               else {
                 $getdata[$name]['value'] = htmlspecialchars($rawdata);
              }

               if(empty($getdata[$name]['value'])) {
                     unset($getdata[$name]);
                  }


      } //foreach end


    if(isset($form['cfg']['antispam']) && isset($_POST[$form['cfg']['antispam']])) {
        if(!empty($_POST[$form['cfg']['antispam']])) {
         $error[] = $form['cfg']['spam'];
        }
    }
     if(isset($form['cfg']['antispamjs']) && isset($_POST[$form['cfg']['antispamjs']])) {
         if(!empty($_POST[$form['cfg']['antispamjs']])) {
             $error[] = $form['cfg']['spam'];
         }
     }


    if(count($error) == 0) {

      if(function_exists("mb_internal_encoding")) mb_internal_encoding($form['cfg']['charset']);
      $get_fromName = (isset($form['fields'][$form['cfg']['from_name']]) && isset($getdata[$form['cfg']['from_name']]['value']) && mb_strlen($getdata[$form['cfg']['from_name']]['value']) > 2) ? $getdata[$form['cfg']['from_name']]['value'] : ((mb_strlen($form['cfg']['from_name']) > 2 && !isset($_POST[$form['cfg']['from_name']])) ? $form['cfg']['from_name'] : 'Anonymous');
      $get_fromEmail = (isset($form['fields'][$form['cfg']['from_email']]) && isset($getdata[$form['cfg']['from_email']]['value']) && mb_strpos('@', $getdata[$form['cfg']['from_email']]['value']) === false) ? $getdata[$form['cfg']['from_email']]['value'] : ((mb_strpos('@', $form['cfg']['from_email']) !== false) ? $form['cfg']['from_email'] : 'noreply@'.$host);

      $fromName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($get_fromName, $form['cfg']['charset'], "Q") : $get_fromName;
      $sb['subject'] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($form['cfg']['subject'], $form['cfg']['charset'], "Q") : $form['cfg']['subject'];
      
      $toName = trim($form['cfg']['to_name'], " ,");
      $toEmail = trim($form['cfg']['to_email'], " ,");
 
      if(strpos($toName, ",") !== false) { 
         $exp_toName = explode(",", $toName);   
         $c = count($exp_toName);
          for($i=0; $i<$c; $i++) {
           $exp_toName[$i] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader(trim($exp_toName[$i]), $form['cfg']['charset'], "Q") : trim($exp_toName[$i]);
          } 
       } 
        else {
          $toName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($toName, $form['cfg']['charset'], "Q") : $toName;
       }
       
      if(strpos($toEmail, ",") !== false) { 
         $exp_toEmail = explode(",", $toEmail);
      }         
      
      $To = '';
      
       if(isset($exp_toEmail)) {
        $c = count($exp_toEmail);
          for($i=0; $i < $c; $i++) { 
               $To .= ((isset($exp_toName) && isset($exp_toName[$i])) ? $exp_toName[$i] : $toName) . " <".trim($exp_toEmail[$i]).">";
               if($i < ($c-1)) $To .= ", ";
           }
       } 
        else {
           $To = ((isset($exp_toName) && isset($exp_toName[0])) ? $exp_toName[0] : $toName)." <".$toEmail.">";
       }


      $headers = "Return-Path: <".$get_fromEmail.">\r\n";
      $headers .= "From: ".$fromName." <".$get_fromEmail.">\r\n";
      $headers .= "X-Mailer: Feedback, v0.3 (http://artuelle.com)\r\n";
      $headers .= "X-Priority: 3\r\n";
      $headers .= "Reply-To: ".$fromName." <".$get_fromEmail.">\r\n";
      //$headers .= "To: ".$To."\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/" . $form['cfg']['type'] . "; charset=\"" . $form['cfg']['charset'] . "\"\r\n";
      $headers .= "Content-Transfer-Encoding: 8bit\r\n";

      $sb['body'] = "";
      // парсим шаблон
      if($form['cfg']['tpl']) {
       $out = tpl(array('name' => $act, 'getdata' => $getdata, 'cfg' => $form['cfg']));
       if(is_string($out)) {
          $sb['body'] = $out;
       }
     }
      // или отдаем голый текст
        if(mb_strlen(trim($sb['body'])) < 10) {
          if(isset($form['cfg']['title']))
              $sb['body'] .= $form['cfg']['title']."\r\n\r\n";
          foreach($getdata as $name => $data) {
              $sb['body'] .= $data['title'].": ".$data['value']."\r\n";
          }
          if($form['cfg']['referer'])
              $sb['body'] .= "\r\n\r\n\r\n\r\n".$ref;
      }
      // если есть что добавить
       if(isset($form['cfg']['adds']) &&
          is_array($form['cfg']['adds'])) {
          $sb = adds($sb);
       }

      //отправка письма
      $mail = mail($To, $sb['subject'], $sb['body'], $headers);

      if($mail) {
          $jsonBox['ok'] = 1;
          $info[] = $form['cfg']['okay'];

         //setcookie("limit", "1", time() + $form['cfg']['limit']);

      }
       else {
           $info[] = $form['cfg']['fuck'];
       }

    }

 } else {
    $error[] = 'Нет настроек формы с именем #'.$act;
 }
    
    if(count($error) > 0) {
        $jsonBox['errors'] = $error;
    }
    if(count($info) > 0) {
        $jsonBox['infos'] = $info;
    }

    die(json_encode($jsonBox)); //мертвые с косами

/* добавляет любые доп данные из вне в нужное место
 * (например в заголовок письма необходимо дабавить Ник юзера или Номер заказа )
 *
 *  */

function adds($vars) {
    global $form;
    $adds = $form['cfg']['adds'];
    foreach($adds as $key => $opts) {
        if(is_string($key)) {
            $one = array();
            $two = array();
            foreach($opts as $i => $val) {
                if(isset($_POST[$val])) {
                  $one[] = '%%'.$val.'%%';
                  $two[] = $_POST[$val];
                }
            }
           $vars[$key] = str_replace($one, $two, $vars[$key]);
        }
    }
       return $vars;
}
/*
 * парсер шаблона
 */
 function tpl($vars) {
    $tpl = 'feedback/tpl/'.$vars['name'].'.tpl';
    if(file_exists($tpl)) {
     $template = file_get_contents($tpl);
        foreach($vars['getdata'] as $name => $data) {
            $template = str_replace(array("%%".$name.".title%%", "%%".$name.".value%%"), array($data['title'], $data['value']), $template);
        }
        $template = preg_replace('/%%.*?%%/is', '', $template);
        return $template;
    }
     else {
      return false;
    }
 }

