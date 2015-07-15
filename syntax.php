<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of syntax
 *
 * @author miso
 */
class syntax_plugin_freechat extends DokuWiki_Syntax_Plugin {

    public function getType() {
        return 'substition';
    }

    public function getPType() {
        return 'normal';
    }

    public function getAllowedTypes() {
        return array('formatting','substition','disabled');
    }

    public function getSort() {
        return 225;
    }

    public function connectTo($mode) {
        $this->Lexer->addSpecialPattern('~~FREECHAT~~',$mode,'plugin_freechat');
    }

    /**
     * Handle the match
     */
    public function handle($match) {



        return array(null,array($params));
    }

    public function render($mode,Doku_Renderer &$renderer,$data) {
        // $data is what the function handle return'ed.
        if($mode == 'xhtml'){
            /** @var Do ku_Renderer_xhtml $renderer */
            list(,list($params)) = $data;


            $renderer->doc .= '

  
  
  
  
  <script src="'.DOKU_BASE.'lib/plugins/freechat/source/client/pfc.js" type="text/javascript"></script>
  <script src="'.DOKU_BASE.'lib/plugins/freechat/source/client/pfc-init.js" type="text/javascript"></script>
  <script src="'.DOKU_BASE.'lib/plugins/freechat/source/client/pfc-core.js" type="text/javascript"></script>
  <script src="'.DOKU_BASE.'lib/plugins/freechat/source/client/pfc-auth.js" type="text/javascript"></script>
  <script src="'.DOKU_BASE.'lib/plugins/freechat/source/client/pfc-commands.js" type="text/javascript"></script>
  <script src="'.DOKU_BASE.'lib/plugins/freechat/source/client/pfc-cmd_join.js" type="text/javascript"></script>
  <script src="'.DOKU_BASE.'lib/plugins/freechat/source/client/pfc-cmd_op.js" type="text/javascript"></script>
  <script src="'.DOKU_BASE.'lib/plugins/freechat/source/client/pfc-cmd_kick.js" type="text/javascript"></script>
  <script src="'.DOKU_BASE.'lib/plugins/freechat/source/client/pfc-cmd_ban.js" type="text/javascript"></script>
  <script src="'.DOKU_BASE.'lib/plugins/freechat/source/client/pfc-channels.js" type="text/javascript"></script>
  <script src="'.DOKU_BASE.'lib/plugins/freechat/source/client/pfc-users.js" type="text/javascript"></script>
  <script src="'.DOKU_BASE.'lib/plugins/freechat/source/client/pfc-utils.js" type="text/javascript"></script>
  <div role="main">


   
    
    <div class="pfc-hook"><a href="http://www.phpfreechat.net">Creating chat rooms everywhere - phpFreeChat</a></div>
    <script type="text/javascript">
      jQuery(\'.pfc-hook\').phpfreechat({show_avatar: true});
    </script>

  </div>';
        }
        return false;
    }

}
