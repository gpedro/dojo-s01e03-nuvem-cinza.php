<?PHP

use App\Nuvem;

class NuvemTest extends PHPUnit_Framework_TestCase
{

	public function testPrimeiroDia()
	{
		$mapaInicio = [
			['.', '.', '*', '.', '.', '.', '*', '*'],
			['.', '*', '*', '.', '.', '.', '.', '.'],
			['*', '*', '*', '.', 'A', '.', '.', 'A'],
			['.', '*', '.', '.', '.', '.', '.', '.'],
			['.', '*', '.', '.', '.', '.', 'A', '.'],
			['.', '.', '.', 'A', '.', '.', '.', '.'],
			['.', '.', '.', '.', '.', '.', '.', '.']
		];

		$mapaFinal = [
			['*', '*', '*', '*', '*', '*', '*', '*'],
			['*', '*', '*', '*', '*', '*', '*', '*'],
			['*', '*', '*', '*', '*', '.', '*', '*'],
			['*', '*', '*', '*', '.', '.', '.', '.'],
			['*', '*', '*', '*', '.', '.', 'A', '.'],
			['*', '*', '*', 'A', '.', '.', '.', '.'],
			['.', '*', '.', '.', '.', '.', '.', '.']
		];

		$nuvem = new Nuvem($mapaInicio);

		$nuvem->advanceDay();
		$nuvem->advanceDay();

		$actualMap = $nuvem->getActualMap();

		$this->assertEquals($mapaFinal, $actualMap);
		$this->assertEquals(3, $nuvem->getDaysElapsed());
	}

}