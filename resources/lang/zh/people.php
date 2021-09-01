<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/master/docs/contribute/translate.md for translations.
 */

return [

    //index
    'people_not_found' => '联系人未找到',
    'people_list_number_kids' => ':count child|:count children',
    'people_list_last_updated' => '最近更新:',
    'people_list_number_reminders' => ':count 个提醒',
    'people_list_blank_title' => '您还没有任何联系人',
    'people_list_blank_cta' => '添加某人',
    'people_list_sort' => '排序',
    'people_list_stats' => ':count 个联系人',
    'people_list_firstnameAZ' => '以名字A → Z排序',
    'people_list_firstnameZA' => '以名字 Z → A排序',
    'people_list_lastnameAZ' => '以姓A → Z排序',
    'people_list_lastnameZA' => '以姓Z → A排序',
    'people_list_lastactivitydateNewtoOld' => 'Sort by last activity date, newest to oldest',
    'people_list_lastactivitydateOldtoNew' => 'Sort by last activity date, oldest to newest',
    'people_list_filter_tag' => '拥有以下标签的联系人：',
    'people_list_clear_filter' => '清除筛选',
    'people_list_contacts_per_tags' => ':count contact|:count contacts',
    'people_list_show_dead' => '显示已故人员 (:count)',
    'people_list_hide_dead' => '隐藏已故人员 (:count)',
    'people_search' => 'Search your contacts…',
    'people_search_no_results' => '未找到任何结果',
    'people_search_next' => '下一页',
    'people_search_prev' => 'Previous',
    'people_search_rows_per_page' => 'Rows per page',
    'people_search_of' => '/',
    'people_search_page' => '页',
    'people_search_all' => '所有',
    'people_add_new' => '添加新的联系人',
    'people_list_account_usage' => '您的账户已联系人使用情况是：:current/:limit ',
    'people_list_account_upgrade_title' => '升级您的帐户, 以打开全部功能。',
    'people_list_account_upgrade_cta' => '立即升级',
    'people_list_untagged' => '查看未加标签的联系人',
    'people_list_filter_untag' => '所有未加标签的联系人',
    'archived_contact_readonly' => 'Archived contact can’t be edited, please unarchive it first.',

    // people add
    'people_add_title' => '添加一位新的联系人',
    'people_add_missing' => 'No person found – add a new one now',
    'people_add_firstname' => '名字',
    'people_add_middlename' => 'Middle name (optional)',
    'people_add_lastname' => '姓氏（选填）',
    'people_add_email' => '邮箱（选填）',
    'people_add_nickname' => '昵称（选填）',
    'people_add_cta' => '添加',
    'people_save_and_add_another_cta' => '提交并添加其他人',
    'people_add_success' => ':name 已成功创建',
    'people_add_gender' => '性别',
    'people_delete_success' => '联系人已被删除',
    'people_delete_message' => '删除联系人',
    'people_delete_confirmation' => 'Are you sure you want to delete :name’s contact? Deletion is immediate and permanent.',
    'people_add_birthday_reminder' => '祝 :name 生日快乐',
    'people_add_birthday_reminder_deceased' => 'On this date, :name would have celebrated their birthday',
    'people_add_import' => '是否要 <a href=":url">导入您的联系人</a>？',
    'people_edit_email_error' => '您的联系人中已经有人使用此电子邮件，请更换一个',
    'people_export' => '导出为 vCard',
    'people_add_reminder_for_birthday' => 'Create an annual birthday reminder',

    // show
    'section_contact_information' => '联系人信息',
    'section_personal_activities' => '活动',
    'section_personal_reminders' => '提醒',
    'section_personal_tasks' => '任务',
    'section_personal_gifts' => '礼物',
    'section_personal_notes' => '便签',

    // archived contacts
    'list_link_to_active_contacts' => '您正在查看存档的联系人， <a href=":url">单击这里</a> 来查看活动的联系人列表。',
    'list_link_to_archived_contacts' => '已存档联系人列表',

    // Header
    'me' => '这是你',
    'edit_contact_information' => '编辑联系人信息',
    'contact_archive' => '存档联系人',
    'contact_unarchive' => '取消存档',
    'contact_archive_help' => 'Archived contacts are not be shown on the contact list, but still appear in search results.',
    'call_button' => '记录通话',
    'set_favorite' => '您收藏的联系人将在联系人列表置顶显示。',

    // Stay in touch
    'stay_in_touch' => '常联系*',
    'stay_in_touch_frequency' => '常联系*提醒频率：每天|常联系*提醒频率：每 {count} 天',
    'stay_in_touch_invalid' => '频率必须大于0。',
    'stay_in_touch_premium' => '您需要升级到高级账户来使用这个功能！',
    'stay_in_touch_modal_title' => '常联系*',
    'stay_in_touch_modal_desc' => '我们将会用邮件提醒您与{firstname}保持联系。',
    'stay_in_touch_modal_label' => 'Send me an email every… {count} day|Send me an email every… {count} days',

    // Calls
    'modal_call_title' => '记录通话',
    'modal_call_comment' => '你们说了什么？（可选）',
    'modal_call_exact_date' => '通话日期',
    'modal_call_who_called' => '谁打来的？',
    'modal_call_emotion' => '您想记录您在此通话中的感受吗？(可选)',
    'calls_add_success' => '已保存通话记录。',
    'call_delete_confirmation' => '你确定要删除此通话记录吗?',
    'call_delete_success' => '成功删除通话记录！',
    'call_title' => '通话记录',
    'call_empty_comment' => '无详细信息',
    'call_blank_title' => '追踪您与{name} 的通话记录',
    'call_blank_desc' => '你打给{name}',
    'call_you_called' => '您拨出的',
    'call_he_called' => '{name} 拨出的',
    'call_emotions' => '情绪：',

    // Conversation
    'conversation_blank' => 'Record conversations you have with :name on social media, SMS…',
    'conversation_delete_link' => '删除对话',
    'conversation_edit_title' => '编辑对话',
    'conversation_edit_delete' => '您是否要删除这个对话？操作无法撤销。',
    'conversation_add_success' => '对话成功添加',
    'conversation_edit_success' => '对话成功更新',
    'conversation_delete_success' => '对话成功删除',
    'conversation_add_title' => '记录一个新对话',
    'conversation_add_when' => '你们何时进行的对话？',
    'conversation_add_who_wrote' => 'Who sent this message?',
    'conversation_add_how' => '你们怎么交流？',
    'conversation_add_you' => '您',
    'conversation_add_content' => '写下你们说的话',
    'conversation_add_what_was_said' => '您说了什么？',
    'conversation_add_another' => '添加另一条消息',
    'conversation_add_error' => '您必须至少添加一条信息',
    'conversation_list_table_messages' => '消息',
    'conversation_list_table_content' => '部分内容(最新消息)',
    'conversation_list_title' => '对话',
    'conversation_list_cta' => '记录对话',

    // age - birthday
    'birthdate_not_set' => 'Birthday is not set',
    'age_approximate_in_years' => '大概:age岁',
    'age_exact_in_years' => ':age岁',
    'age_exact_birthdate' => '出生:date',

    // Last called
    'last_called' => '最近通话: :date',
    'last_called_empty' => '最近通话: 未知',
    'last_activity_date' => '最近一起的活动: :date',
    'last_activity_date_empty' => '最近一起的活动: 未知',

    // additional information
    'information_edit_success' => '记录更新成功',
    'information_edit_title' => '编辑 :name的个人信息',
    'information_edit_max_size' => '最大值 :size Kb',
    'information_edit_max_size2' => '最大 {size} Kb',
    'information_edit_firstname' => '名字',
    'information_edit_lastname' => 'Last name (optional)',
    'information_edit_description' => 'Description (optional)',
    'information_edit_description_help' => '用于在联系人列表中添加一些元素（如有必要）',
    'information_edit_unknown' => '我不知道具体年龄',
    'information_edit_probably' => 'This person is probably…',
    'information_edit_not_year' => 'I know the day and month of this person’s birthday, but not the year…',
    'information_edit_exact' => '我知道这个人确切的生日…',
    'information_edit_birthdate_label' => '生日',
    'information_no_work_defined' => '未定义工作信息',
    'information_work_at' => '在 :company工作',
    'work_add_cta' => '更新工作信息',
    'work_edit_success' => 'Work information updated',
    'work_edit_title' => '更新:name的工作信息',
    'work_edit_job' => '职位名称 (可选)',
    'work_edit_company' => '公司 (可选)',
    'work_information' => '工作信息',

    // food preferences
    'food_preferences_add_success' => '食品偏好已被保存',
    'food_preferences_edit_description' => '也许:firstname或:family的家庭有过敏，或者不喜欢一瓶特定的酒等。把这些信息列在这里，在下次和邀请他们吃饭时可以在这里看到这些信息。',
    'food_preferences_edit_description_no_last_name' => '也许:firstname有过敏情况，或者不喜欢一瓶特定的酒等。把这些信息列在这里，在下次和邀请他们吃饭时可以在这里看到这些信息。',
    'food_preferences_edit_title' => '注明食物偏好',
    'food_preferences_edit_cta' => '保存食物偏好',
    'food_preferences_title' => '食物偏好',
    'food_preferences_cta' => '添加食物偏好',

    // reminders
    'reminders_blank_title' => '您有什么关于:name的提醒吗？',
    'reminders_blank_add_activity' => '添加提醒',
    'reminders_add_title' => '你需要关于:name的提醒吗？',
    'reminders_add_description' => 'Please remind me to…',
    'reminders_add_next_time' => '您希望下一次关于这个的提醒的时间是？',
    'reminders_add_once' => '仅一次',
    'reminders_add_recurrent' => '每',
    'reminders_add_starting_from' => '提醒我',
    'reminders_add_cta' => '添加提醒',
    'reminders_edit_update_cta' => '更新提醒',
    'reminders_add_error_custom_text' => '您需要为此提醒指定文本',
    'reminders_create_success' => '已成功添加提醒',
    'reminders_delete_success' => '已成功删除提醒',
    'reminders_update_success' => '已成功更新提醒',
    'reminders_add_optional_comment' => '可选备注',

    'reminder_frequency_day' => '每:number天',
    'reminder_frequency_week' => ' 每:number星期',
    'reminder_frequency_month' => ' 每:number月',
    'reminder_frequency_year' => '每:number年',
    'reminder_frequency_one_time' => '在:date',
    'reminders_delete_confirmation' => '确实要删除此提醒吗？',
    'reminders_delete_cta' => '删除',
    'reminders_next_expected_date' => '在',
    'reminders_cta' => '添加提醒',
    'reminders_description' => 'We will send an email for each one of the reminders below. Reminders are sent every morning the day events will happen. Reminders automatically added for birthdays can not be deleted. If you want to change those dates, edit the birthday of the contacts.',
    'reminders_one_time' => '一次性',
    'reminders_type_week' => '周',
    'reminders_type_month' => '月',
    'reminders_type_year' => '年',
    'reminders_birthday' => ':name的生日',
    'reminders_free_plan_warning' => '您当前使用的是免费版。若需要邮件提醒，请升级您的账户。',

    // relationships
    'relationship_form_add' => '添加一个新的关系',
    'relationship_form_edit' => '修改一个已有关系',
    'relationship_form_is_with' => 'This person is…',
    'relationship_form_is_with_name' => ':name is…',
    'relationship_form_add_choice' => '这是与谁的关系？',
    'relationship_form_create_contact' => '添加一个新的人',
    'relationship_form_associate_contact' => '导入一位已存在的联系人',
    'relationship_form_associate_dropdown' => '请从下拉菜单选择一位联系人',
    'relationship_form_associate_dropdown_placeholder' => '搜索并选择一位现有联系人',
    'relationship_form_also_create_contact' => '将此人创建为您的联系人',
    'relationship_form_add_description' => '这会让你像其他联系人一样对待这个人。',
    'relationship_form_add_no_existing_contact' => '您暂时没有能与 :name 链接的联系人',
    'relationship_delete_confirmation' => '您确定要将关系删除吗？本操作无法撤销。',
    'relationship_unlink_confirmation' => '您确定要将关系删除吗？此操作不会从您的联系人列表将其删除。',
    'relationship_form_add_success' => '关系设置完成',
    'relationship_form_deletion_success' => '此关系已删除',

    // tasks
    'tasks_title' => '任务',
    'tasks_blank_title' => '您暂时还没任务。',
    'tasks_form_title' => '标题',
    'tasks_form_description' => '描述 (可选)',
    'tasks_add_task' => '添加任务',
    'tasks_delete_success' => '成功删除任务！',
    'tasks_complete_success' => '成功变更任务！',

    // activities
    'activity_title' => '活动',
    'activity_type_category_simple_activities' => '一般活动',
    'activity_type_category_sport' => '运动',
    'activity_type_category_food' => '食物',
    'activity_type_category_cultural_activities' => '文化',
    'activity_type_just_hung_out' => '约会',
    'activity_type_watched_movie_at_home' => '看电影',
    'activity_type_talked_at_home' => '谈心',
    'activity_type_did_sport_activities_together' => '一起打球',
    'activity_type_ate_at_his_place' => '在对方家里做客',
    'activity_type_went_bar' => '泡吧',
    'activity_type_ate_at_home' => '在家吃饭',
    'activity_type_picnicked' => '已选择',
    'activity_type_ate_restaurant' => '在饭店吃',
    'activity_type_went_theater' => '看戏',
    'activity_type_went_concert' => '去音乐会',
    'activity_type_went_play' => '出去玩',
    'activity_type_went_museum' => '去博物馆',
    'activities_add_activity' => '添加活动',
    'activities_add_more_details' => '添加更多详情',
    'activities_add_emotions' => '添加情绪',
    'activities_add_category' => '指定类别',
    'activities_add_participants_cta' => '添加参与者',
    'activities_item_information' => ':Activity，发生于:date',
    'activities_add_title' => '您与 {name} 一起做了什么?',
    'activities_summary' => '描述你做了什么',
    'activities_add_pick_activity' => 'Would you like to categorize this activity? You don’t have to, but it will give you statistics later on (optional)',
    'activities_add_date_occured' => 'The activity happened on…',
    'activities_add_participants' => '除了 {name} 之外，谁参与了这个活动？(可选)',
    'activities_add_emotions_title' => '您想记录您在此通话中的感受吗？(可选)',
    'activities_blank_title' => '记录您与 {name} 之间的点滴',
    'activities_blank_add_activity' => '添加活动',
    'activities_add_success' => '已成功添加活动',
    'activities_add_error' => '添加活动时出现错误',
    'activities_update_success' => '活动已成功更新',
    'activities_delete_success' => '活动已成功删除',
    'activities_who_was_involved' => '谁参与了？',
    'activities_activity' => '活动类别',
    'activities_view_activities_report' => '查看活动报告',
    'activities_profile_title' => ':name 与您之间的活动报告',
    'activities_profile_subtitle' => '截至目前为止您与:name的活动记录如下：近一年共 :activities_last_twelve_months次，总共 :total_activities次',
    'activities_profile_year_summary_activity_types' => ':year年活动类型汇总',
    'activities_profile_year_summary' => ':year年你们一起进行的活动',
    'activities_profile_number_occurences' => ':value 次活动',
    'activities_list_participants' => 'Participants ({total}):',
    'activities_list_emotions' => '我感觉:',
    'activities_list_date' => '发生于',
    'activities_list_category' => '分类：',

    // notes
    'notes_create_success' => '便签已成功创建',
    'notes_update_success' => '便笺已成功保存',
    'notes_delete_success' => '注释已成功删除',
    'notes_add_cta' => '添加注释',
    'notes_favorite' => '添加/删除喜爱标记',
    'notes_delete_title' => '删除便签',
    'notes_delete_confirmation' => '确实要删除此便签吗？',

    // gifts
    'gifts_title' => '礼物往来',
    'gifts_add_success' => '已成功添加礼物',
    'gifts_delete_success' => '礼物已成功删除',
    'gifts_delete_confirmation' => '是否确实要删除此礼物？',
    'gifts_add_gift' => '添加礼物',
    'gifts_link' => '链接',
    'gifts_for' => '赠予：{name}',
    'gifts_delete_cta' => '删除',
    'gifts_add_title' => '与:name的礼物来往',
    'gifts_add_gift_idea' => '礼品创意',
    'gifts_add_gift_already_offered' => '送出的礼物',
    'gifts_add_gift_received' => '收到的礼物',
    'gifts_add_gift_title' => '这是什么礼物？',
    'gifts_add_gift_name' => '礼品名称',
    'gifts_add_link' => '礼物链接 (可选)',
    'gifts_add_value' => '值 (可选)',
    'gifts_add_comment' => '备注 (可选)',
    'gifts_add_recipient' => '收件人(可选)',
    'gifts_add_recipient_field' => '收件人',
    'gifts_add_photo' => '相片(可选)',
    'gifts_add_photo_title' => '为此礼物添加一张照片',
    'gifts_add_someone' => '这份礼物特别是给{name}的家人',
    'gifts_delete_title' => '删除礼物',
    'gifts_ideas' => '心愿单',
    'gifts_offered' => '送出的礼物',
    'gifts_offered_as_an_idea' => '标记为心愿单',
    'gifts_received' => '收到的礼物',
    'gifts_view_comment' => '查看评论',
    'gifts_mark_offered' => '标记为提供',
    'gifts_update_success' => '礼物已成功更新',
    'gifts_add_date' => 'Date (optional)',

    // debts
    'debt_delete_confirmation' => '是否确实要删除此债务？',
    'debt_delete_success' => '已成功删除债务',
    'debt_add_success' => '已成功添加债务',
    'debt_title' => '债务',
    'debt_add_cta' => '增加债务',
    'debt_you_owe' => '您欠:amount',
    'debt_they_owe' => ':name欠您:amount',
    'debt_add_title' => '债务管理',
    'debt_add_you_owe' => ':name借给您',
    'debt_add_they_owe' => '您借给:name',
    'debt_add_amount' => '数额',
    'debt_add_reason' => '事由（可选）',
    'debt_add_add_cta' => '增加债务',
    'debt_edit_update_cta' => '更新债务',
    'debt_edit_success' => '债务已成功更新',
    'debts_blank_title' => '管理您与:name之间的债务关系',

    // tags
    'tag_edit' => '编辑标签',
    'tag_add' => '添加标签',
    'tag_add_search' => '添加或搜索标签',
    'tag_no_tags' => '还没有标签',

    // Introductions
    'introductions_sidebar_title' => '你们是如何认识的？',
    'introductions_blank_cta' => '您如何遇到的:name',
    'introductions_title_edit' => '你是怎么认识:name的？',
    'introductions_additional_info' => '你在哪里相遇',
    'introductions_edit_met_through' => '有人把你介绍给这个人吗？',
    'introductions_no_met_through' => '没有人',
    'introductions_first_met_date' => '第一次相见',
    'introductions_no_first_met_date' => '我不记得具体日期',
    'introductions_first_met_date_known' => '这是我们相遇的日子',
    'introductions_add_reminder' => '添加提醒以庆祝此事件发生的周年纪念',
    'introductions_update_success' => '你成功更新了关于你们相识的故事',
    'introductions_met_through' => '通过 <a href=":url">:name</a>遇到',
    'introductions_met_date' => '在:date遇到',
    'introductions_reminder_title' => '你第一次遇见的那一天的周年纪念日',

    // Deceased
    'deceased_reminder_title' => ':name的去世周年怀念',
    'deceased_mark_person_deceased' => 'Mark this as deceased',
    'deceased_know_date' => 'I know the date that this person died',
    'deceased_add_reminder' => '为此日期添加提醒',
    'deceased_label' => '逝者',
    'deceased_date_label' => '死亡日期',
    'deceased_label_with_date' => '在:date去世',
    'deceased_age' => '享年',

    // Contact information
    'contact_info_title' => '联系信息',
    'contact_info_form_content' => '内容',
    'contact_info_form_contact_type' => '联系方式',
    'contact_info_form_personalize' => '个性化',
    'contact_info_address' => '生活在',

    // Addresses
    'contact_address_title' => '地址',
    'contact_address_form_name' => '标签 (可选)',
    'contact_address_form_street' => '街 (可选)',
    'contact_address_form_city' => '城市 (可选)',
    'contact_address_form_province' => '省 (可选)',
    'contact_address_form_postal_code' => '邮政编码 (可选)',
    'contact_address_form_country' => '国家 (可选)',
    'contact_address_form_latitude' => '纬度 (仅限数字) (可选)',
    'contact_address_form_longitude' => '经度 (仅限数字) (可选)',

    // Pets
    'pets_kind' => '宠物种类',
    'pets_name' => '名字 (可选)',
    'pets_create_success' => '已成功添加宠物',
    'pets_update_success' => '宠物已更新',
    'pets_delete_success' => '宠物已被删除',
    'pets_title' => '宠物',
    'pets_reptile' => '爬行动物',
    'pets_bird' => '鸟',
    'pets_cat' => '猫',
    'pets_dog' => '狗',
    'pets_fish' => '鱼',
    'pets_hamster' => '仓鼠',
    'pets_horse' => '马',
    'pets_rabbit' => '兔子',
    'pets_rat' => '鼠',
    'pets_small_animal' => '小动物',
    'pets_other' => '其它',

    // life events
    'life_event_list_tab_life_events' => '生活事件',
    'life_event_list_tab_other' => 'Notes, reminders, …',
    'life_event_list_title' => '生活事件',
    'life_event_blank' => '记录在{name} 身上发生的事情以供将来参考',
    'life_event_list_cta' => '添加生活事件',
    'life_event_create_category' => '全部类别',
    'life_event_create_life_event' => '添加生活事件',
    'life_event_create_default_title' => '标题 (可选)',
    'life_event_create_default_story' => '故事 (可选)',
    'life_event_create_date' => 'You do not need to indicate a month or a day – only the year is mandatory.',
    'life_event_create_default_description' => '添加你知道的信息',
    'life_event_create_add_yearly_reminder' => '为该事件添加年度提醒',
    'life_event_create_success' => '生活事件添加成功',
    'life_event_delete_title' => '删除生活事件',
    'life_event_delete_description' => '确实要删除此生活事件吗？删除是永久性的。',
    'life_event_delete_success' => '事件已删除',
    'life_event_date_it_happened' => '发生日期',
    'life_event_category_work_education' => 'Work & education',
    'life_event_category_family_relationships' => 'Family & relationships',
    'life_event_category_home_living' => 'Home & living',
    'life_event_category_health_wellness' => 'Health & wellness',
    'life_event_category_travel_experiences' => 'Travel & experiences',
    'life_event_sentence_new_job' => '开始了新的工作',
    'life_event_sentence_retirement' => '退休',
    'life_event_sentence_new_school' => '开始上学',
    'life_event_sentence_study_abroad' => '出国留学',
    'life_event_sentence_volunteer_work' => '开始志愿服务',
    'life_event_sentence_published_book_or_paper' => '发表了一篇论文',
    'life_event_sentence_military_service' => '开始服役',
    'life_event_sentence_new_relationship' => '开始一段关系',
    'life_event_sentence_engagement' => '订婚了',
    'life_event_sentence_marriage' => '结婚',
    'life_event_sentence_anniversary' => '周年纪念日',
    'life_event_sentence_expecting_a_baby' => '想要孩子',
    'life_event_sentence_new_child' => '有个孩子',
    'life_event_sentence_new_family_member' => '新增了家庭成员',
    'life_event_sentence_new_pet' => '养了宠物',
    'life_event_sentence_end_of_relationship' => '结束了一段关系',
    'life_event_sentence_loss_of_a_loved_one' => '失去了心爱的人',
    'life_event_sentence_moved' => '搬家了',
    'life_event_sentence_bought_a_home' => '买了新房子',
    'life_event_sentence_home_improvement' => '装修了',
    'life_event_sentence_holidays' => '去度假',
    'life_event_sentence_new_vehicle' => '买了辆新车',
    'life_event_sentence_new_roommate' => '有了新室友',
    'life_event_sentence_overcame_an_illness' => '熬过了疾病',
    'life_event_sentence_quit_a_habit' => '戒掉一个习惯',
    'life_event_sentence_new_eating_habits' => '开始新的饮食习惯',
    'life_event_sentence_weight_loss' => '减肥了',
    'life_event_sentence_wear_glass_or_contact' => '开始佩戴玻璃或隐形眼镜',
    'life_event_sentence_broken_bone' => '折断了骨头',
    'life_event_sentence_removed_braces' => '去掉了牙齿矫正器',
    'life_event_sentence_surgery' => '做了手术',
    'life_event_sentence_dentist' => '去看牙医了',
    'life_event_sentence_new_sport' => '开始运动',
    'life_event_sentence_new_hobby' => '有了新爱好',
    'life_event_sentence_new_instrument' => '学会了新乐器',
    'life_event_sentence_new_language' => '学了一门新的语言',
    'life_event_sentence_tattoo_or_piercing' => '纹身了或者打了耳洞',
    'life_event_sentence_new_license' => '获得驾照',
    'life_event_sentence_travel' => '旅游了',
    'life_event_sentence_achievement_or_award' => '获得成就或奖项',
    'life_event_sentence_changed_beliefs' => '改变信仰',
    'life_event_sentence_first_word' => '第一次发言',
    'life_event_sentence_first_kiss' => '第一次接吻',

    // documents
    'document_list_title' => '文档',
    'document_list_cta' => '上载文档',
    'document_list_blank_desc' => '在这里, 您可以存储与此人相关的文档。',
    'document_upload_zone_cta' => '上传文件',
    'document_upload_zone_progress' => 'Uploading the document…',
    'document_upload_zone_error' => '上传文件时出错，请再试一次 ！',

    // Photos
    'photo_title' => '照片',
    'photo_list_title' => '相关照片',
    'photo_list_cta' => '上传照片',
    'photo_list_blank_desc' => '您可以存储有关此联系人的图像。立即上传一个!',
    'photo_upload_zone_cta' => '上传照片',
    'photo_current_profile_pic' => '目前头像',
    'photo_make_profile_pic' => '制作头像',
    'photo_delete' => '删除照片',
    'photo_next' => 'Next photo ❯',
    'photo_previous' => '❮ Previous photo',

    // Avatars
    'avatar_change_title' => '更换头像',
    'avatar_question' => '您想使用哪个头像？',
    'avatar_default_avatar' => '默认头像',
    'avatar_adorable_avatar' => '喜爱头像',
    'avatar_gravatar' => '此用户的电子邮件地址 与Gravatar关联 。 <a href="https://gravatar.com/">Gravatar</a> 是全球通用的头像服务。',
    'avatar_current' => '保持当前头像',
    'avatar_photo' => '从您上传的照片',
    'avatar_crop_new_avatar_photo' => 'Crop new avatar photo',

    // emotions
    'emotion_this_made_me_feel' => '这让你觉得...',

    // logs
    'auditlogs_link' => '历史',
    'auditlogs_title' => ':name 发生的所有事件',
    'auditlogs_breadcrumb' => '历史',
    'auditlogs_author' => ':name 于 :date ',

    // contact field label
    'contact_field_label_home' => '家庭',
    'contact_field_label_work' => '工作',
    'contact_field_label_cell' => '手机',
    'contact_field_label_fax' => '传真',
    'contact_field_label_pager' => '寻呼机',
    'contact_field_label_main' => '主要',
    'contact_field_label_other' => '其它',
    'contact_field_label_personal' => '个人',
];
