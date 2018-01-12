<?= $this->Html->css('articles.css') ?>
	<div class="container">
		<div class="content_header">
			<a href="/articles">
				<div class="header_title">ToDo Function</div>
			</a>
		</div>
		<div class="main_content">
			<form action="/articles/add" method="get">
				<div class="action_content">
					<div class="input_content">
            <input type="text" size='38' id='input' placeholder='ToDoを入力' name="name" />
            <button class="submit_btn">送信</button>
          </div>
        </form>
        <div class="output_content">
	        <hr/>
	        <article class="article">
						<ul>
							<?php foreach($query as $row): ?>
									<li>
										<a class="item_link" href="/articles/lg/<?php print $row->id ?>"><?php print $row->name ?></a>
									</li>
							<?php endforeach ?>
						</ul>
      	  </article>
				</div>
				<div class="output_content">
					<div class="tool">
						<div class="content_title">Done</div>
					</div>
					<hr/>
					<article class="article">
						<?php foreach($query0 as $row): ?>
						<li>
							<a class="item_link" href="/articles/lg/<?php print $row->id ?>">
								<?php print $row->name ?>
							</a>
						</li>
						<?php endforeach ?>
					</article>
				</div>
			</div>
		</div>